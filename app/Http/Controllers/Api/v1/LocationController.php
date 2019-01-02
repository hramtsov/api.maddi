<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\v1\BaseController as BaseController;

use App\Entity\Location;
use Validator;

class LocationController extends BaseController
{
    public function getList(Request $request) {

		$validator = Validator::make($request -> all(),[
			'parent' => 'integer',
			'type'=> 'in:country,region,city,metro,district'
		]);
		if ($validator -> fails()) {
			return $this->sendError(101, $validator->errors());
		}

		$type = $request->get('type');
		$parent = $request->get('parent');

		$locations = Location::select('id', 'name', 'slug', 'parent_id', 'type');

		empty($parent) ?: $locations->where('parent_id', $parent);
		empty($type) ?: $locations->where('type', $type);

		$locations = $locations->get();

		return $this->sendResponse($locations);
	}

}
