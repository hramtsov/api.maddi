<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Entity\Location;

class BaseController extends Controller
{

	protected $errors = [
		101 => 'Не валидные данные',
		102 => 'Пользователя не существует',
		103 => 'Ошибка регистрации пользователя',

	];

	public function sendResponse($result = []) {
		$response = [
			'status' => true,
			'data' => $result
		];

		return response()->json($response, 200);
	}

	public function sendError($error, $errorMessages = [], $code = 200) {
		$response = [
			'status' => false,
			'data' => $errorMessages,

			'message' => array_get($this->errors, $error),
			'error_code' => $error
		];

		return response()->json($response, $code);
	}
}
