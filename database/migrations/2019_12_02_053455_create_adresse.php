<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('adresse', 255);
			$table->bigInteger('code_postal');
            $table->string('ville', 255);
            //foreignkey pour le client
          //  $table->unsignedBigInteger('client_id');
           // $table->foreign('client_id')->references('id')->on('clients');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
        //desactiver les contrainte  de foreign key 
    //    Schema::disableForeignKeyConstraints();
        //efface la table contacts
        Schema::drop('adresses');
        //reactiver les contrainte  de foreign key 
    //    Schema::enableForeignKeyConstraints();
    }
}
