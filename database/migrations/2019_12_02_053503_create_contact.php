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
    Schema::create('contacts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamps();
      $table->string('nom', 255);
      $table->string('prenom', 255);
      $table->bigInteger('tel');
      $table->string('email', 255);
      $table->string('poste', 255);
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
