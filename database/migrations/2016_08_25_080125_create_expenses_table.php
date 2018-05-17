<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('expense_id');
            $table->string('user_id');
            $table->string('vendor_name');
            $table->decimal('amount');
            $table->string('mode');
            $table->string('remarks');
            $table->string('check_no')->nullable();
            $table->string('d_d_no')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('userid')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('expenses');
    }
}
