<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewSellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sellername');
            $table->string('sellersurname');
            $table->string('selleraddress');
            $table->string('sellertel');
            $table->string('sellerimg');
            $table->string('sellergender');
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
        Schema::dropIfExists('newSeller');
    }
}
