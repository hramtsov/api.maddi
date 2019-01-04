<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\v1\BaseController as BaseController;

use App\User;
use Validator;
use Response;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class AuthController extends BaseController
{

	public function login(Request $request){
		$validator = Validator::make($request -> all(),[
			'email' => 'required|string|email|max:255',
			'password'=> 'required'
		]);
		if ($validator -> fails()) {
			return $this->sendError(101, $validator->errors());
		}

//		if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])){
//			$user = Auth::user();
//			$success['token'] =  $user->createToken('Personal Access Token - Maddi')->accessToken;
//			return $this->sendResponse($success, 201);
//		} else{
//			return $this->sendError(102, [], 401);
//		}

		$credentials = request(['email', 'password']);

		if(!Auth::attempt($credentials)) {
			return $this->sendError(102, [], 401);
		}

		$user = $request->user();

		$tokenResult = $user->createToken('Personal Access Token - Maddi');
		$token = $tokenResult->token;
		if ($request->get('remember_me')) {
			$token->expires_at = Carbon::now()->addMonths(1);
		} else {
			$token->expires_at = Carbon::now()->addDays(3);
		}
		$token->save();

		return $this->sendResponse([
										'access_token' => $tokenResult->accessToken,
										'token_type' => 'Bearer',
										'expires_at' => Carbon::parse(
											$tokenResult->token->expires_at
										)->toDateTimeString()
									], 201);

	}


	public function register(Request $request, $role){

		switch ($role) {
			case 'client':

					$validator = Validator::make($request -> all(),[
						'phone' => 'required|numeric|unique:users',
					]);

					if ($validator -> fails()) {
						return $this->sendError(101, $validator->errors());
					}


					$token = Crypt::encrypt([
						'code' => '12345',
						'time' => Carbon::now()
					]);

					$user = User::create([
							'phone' => $request->get('phone'),
							'phone_token' => $token,
							'role' => $role
						]);

					break;

			case 'master':

//					$validator = Validator::make($request -> all(),[
//						'email' => 'required|string|email|max:255|unique:users',
//						'name' => 'required',
//						'password'=> 'required'
//					]);
//
//					if ($validator -> fails()) {
//						return $this->sendError(101, $validator->errors());
//					}
//
//					$user = User::create([
//						'name' => $request->get('name'),
//						'email' => $request->get('email'),
//						//'password'=> bcrypt($request->get('password')),
//						'role' => $role
//					]);

					break;
		}



		if ($user) {
			return $this->sendResponse(['user' => $user], 202);
		} else {
			return $this->sendError(103, $user);
		}

	}

	public function logout(Request $request)
	{
		$request->user()->token()->revoke();
		return $this->sendResponse();
	}

	public function user()
	{
		$user = Auth::user();
		return $this->sendResponse(['user' => $user]);
	}
}