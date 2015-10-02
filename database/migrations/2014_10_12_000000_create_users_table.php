<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('user_id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->tinyInteger('subscription_status');
			$table->tinyInteger('status');
			$table->tinyInteger('pwd_status');
			$table->timestamp('pwd_expiration_time');
			$table->rememberToken();
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('users');
	}
}
