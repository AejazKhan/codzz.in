<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminRequest extends Request {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'title' => 'required',
			'heading' => 'required',
			'full_blog' => 'required',
			'thumbnail' => 'required',
			'images' => 'required',
			'written_by' => 'required|integer|max:3',
			'updated_by' => 'required|integer|max:3',
			'published_at' => 'required|date',
			'status' => 'required|integer|max:2',
			'seo_url' => 'required',
		];
	}
}
