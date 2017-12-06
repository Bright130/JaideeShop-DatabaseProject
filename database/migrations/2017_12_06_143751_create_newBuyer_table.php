<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_buyers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('buyername');
          $table->string('buyersurname');
          $table->string('buyeraddress');

          $table->string('buyertel');
          $table->string('buyerimg');
          $table->string('buyergender');
          $table->string('email')->unique();
          $table->string('password');
          $table->rememberToken();
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
        Schema::dropIfExists('newBuyer');
    }
}
