<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->integer('income');
            $table->integer('transport')->default('0');
            $table->integer('housing')->default('0');
            $table->integer('utility')->default('0');
            $table->integer('entertainment')->default('0');
            $table->integer('children')->default('0');
            $table->integer('children_num')->default('1');
            $table->integer('dependant')->default('0');
            $table->integer('dependant_num')->default('1');
            $table->integer('pers');
            $table->integer('pension');
            $table->integer('nhf');
            $table->integer('freepay');
            $table->integer('grosspay');
            $table->integer('taxable');
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
        Schema::dropIfExists('transactions');
    }
}
