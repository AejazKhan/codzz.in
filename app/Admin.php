<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
	protected $table = "blogs";

	protected $fillable = ['title', 'heading', 'full_blog', 'thumbnail', 'images', 'written_by', 'updated_by',
		'status', 'seo_url'];

	public function scopePublishedAttribute($data) {
		$this->attributes['published_at'];

	}
}
