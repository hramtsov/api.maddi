<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\v1\BaseController as BaseController;

use App\Entity\Category;
use Validator;

class CategoryController extends BaseController
{
    public function getList(Request $request) {

		$validator = Validator::make($request -> all(),[
			'parent' => 'integer'
		]);
		if ($validator -> fails()) {
			return $this->sendError(101, $validator->errors());
		}

		$list = Category::select('id', 'name', 'slug', 'parent_id');
		if($request->has('parent')) {
			$parent = $request->get('parent') == 0 ? null : $request->get('parent');
			$list = $list->where('parent_id', $parent);
		}

		$list = $list->get();
		return $this->sendResponse($list);
	}

}
