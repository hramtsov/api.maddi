<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Category extends Model
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

	protected $fillable = ['name', 'slug', 'parent_id'];


//	protected $guarded = [];

//	protected $casts = [
//		'declensions' => 'array',
//	];

	public function sluggable()
	{
		return [
			'slug' => [
				//'source' => ['parent.slug', 'name'],
				'source' => 'name'
			]
		];
	}
}
