<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('phone');
			$table->string('email');
			$table->string('name');
			$table->string('password');
			$table->string('date_of_birth');
			$table->integer('blood_type_id')->unsigned()->nullable()->index();
			$table->date('last_donation_date');
			$table->integer('city_id')->unsigned()->nullable()->index();
			$table->string('pin_code')->nullable();
			$table->string('api_token')->nullable()->unique();
			$table->boolean('activation')->default(1);
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}