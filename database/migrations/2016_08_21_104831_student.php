<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
        //Basic entry
            $table->increments('id');            
            $table->string('student_id');
            $table->string('advisor_teacher_id');
            $table->string('fullname');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('mobile_number');
            $table->string('photo_name');
            $table->string('email');   
            $table->string('active')->default(1);
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
		Schema::drop('Student');
	}

}
