<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');


			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');

			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('suppliers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');

			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('reminders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamp('reminder_date');
			$table->integer('interval');
			$table->text('notes');

			$table->integer('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('types');
			
			$table->integer('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients');
			
			$table->integer('supplier_id')->unsigned();
			$table->foreign('supplier_id')->references('id')->on('suppliers');

			$table->softDeletes();
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
		Schema::drop('reminders');
		Schema::drop('types');
		Schema::drop('clients');
		Schema::drop('suppliers');
	}

}
