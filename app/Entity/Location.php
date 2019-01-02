<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Location extends Model
{
	use SluggableScopeHelpers;
	use Sluggable , NodeTrait {
		NodeTrait::replicate as replicateNode;
		Sluggable::replicate as replicateSlug;
	}

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function replicate(array $except = null)
	{
		$instance = $this->replicateNode($except);
		(new SlugService())->slug($instance, true);

		return $instance;
	}

//	protected $casts = [
//		'declensions' => 'array',
//	];

	public function sluggable()
	{
		$source = 'name';

		switch ($this->type) {
			case 'district':
				$source = ['parent.slug', 'name'];
				break;
			case 'metro':
				$source = ['parent.slug', 'name'];
				break;
		}

		$res = [
			'slug' => [
				'source' => $source,
                'uniqueSuffix' => function ($slug, $separator, $list) {

						$twins = 0;
						foreach ($list as $item_id => $item_slug) {
							$it = $this::find($item_id);

							if ($this->parent_id == $it->parent_id) {
								$twins++;
							}

						}

						if ($twins > 0) {
							return $twins;
						} else {
							return false;
						}

                }
			]
		];

		return $res;

	}

	public static function boot()
	{
		parent::boot();
		static::saved(function($model)
		{
			$slug = $model->slug;
			// Удаляем дефис после слага, если он есть
			if (substr($slug, -1) === '-') {
				$model->slug = substr($slug,0,-1);
				$model->save();
			}
		});
	}

	public static function typeList(): array
	{
		return [
			'country' => 'Страна',
			'region' => 'Область',
			'city' => 'Город',
			'metro' => 'Метро',
			'district' => 'Район', // area street
		];
	}


	public function getTypeAttribute($value)
	{
		return [
			'name' => array_get($this->typeList(), $value),
			'slug' => $value
		];
	}

}
