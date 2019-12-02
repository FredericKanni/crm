<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom', 255);
			$table->string('prenom', 255);
			$table->bigInteger('tel');
			$table->string('email', 255);
            $table->string('poste', 255);
            //foreignkey pour le client
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
