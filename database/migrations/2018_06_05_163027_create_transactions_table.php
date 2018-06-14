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
            $table->integer('transport');
            $table->integer('housing');
            $table->integer('utility');
            $table->integer('entertainment');
            $table->integer('children');
            $table->integer('children_num');
            $table->integer('dependant');
            $table->integer('dependant_num');
            $table->string('status');
            $table->string('period');
            $table->unique(['user_id','period']);
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
