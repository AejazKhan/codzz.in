<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableComments extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('comments', function (Blueprint $table) {
			$table->increments('comment_id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('user_id')->on('users');
			$table->integer('blog_id')->unsigned();
			$table->foreign('blog_id')->references('blog_id')->on('blogs');
			$table->text('comment');
			$table->text('comment_reply');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('comments');
	}
}
