<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            //foreignkey pour le pour l adresse 
            $table->unsignedBigInteger('id_adresse');
            $table->foreign('id_adresse')->references('id')->on('adresses');
        });



        //enlever car double foreign key = pas possible d ajouter ds la bdd
        // Schema::table('adresses', function (Blueprint $table) {
        //     //foreignkey pour le pour l adresse 
        //     $table->unsignedBigInteger('id_client');
        //     $table->foreign('id_client')->references('id')->on('clients');
        // });

        Schema::table('contacts', function (Blueprint $table) {
            //foreignkey pour le pour l adresse 
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {





        Schema::table('clients', function (Blueprint $table) {
            //disable contrainte
            Schema::disableForeignKeyConstraints();
            // drop foreign keys
            $table->dropForeign('clients_id_adresse_foreign');
            //drop le champ
            $table->dropColumn('id_adresse');
            //enable contrainte
            Schema::enableForeignKeyConstraints();
        });



        //supprimer car plus besion 
        // Schema::table('adresses', function (Blueprint $table) {
        //     //disable contrainte
        //     Schema::disableForeignKeyConstraints();
        //     // drop foreign keys
        //     $table->dropForeign('adresses_id_client_foreign');
        //     //drop le champ
        //     $table->dropColumn('id_client');
        //     //enable contrainte
        //     Schema::enableForeignKeyConstraints();
        // });


        Schema::table('contacts', function (Blueprint $table) {
            //disable contrainte
            Schema::disableForeignKeyConstraints();
            // drop foreign keys
            $table->dropForeign('contacts_id_client_foreign');
            //drop le champ
            $table->dropColumn('id_client');
            //enable contrainte
            Schema::enableForeignKeyConstraints();
        });
    }
}
