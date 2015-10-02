<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableBlog extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('blogs', function (Blueprint $table) {
			$table->increments('blog_id');
			$table->string('title');
			$table->string('heading');
			$table->text('full_blog');
			$table->string('thumbnail');
			$table->string('images');
			$table->string('status');
			$table->integer('written_by');
			$table->integer('updated_by');
			$table->string('seo_url');
			$table->timestamp('published_at');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('blog');
	}
}
