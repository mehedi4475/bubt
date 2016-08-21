<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			//Basic entry
            $table->increments('id');            
            $table->string('username');
            $table->string('password');
            $table->string('user_type');
            $table->string('user_id');
            $table->string('active')->default(1);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
            
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
