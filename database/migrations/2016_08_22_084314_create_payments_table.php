<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_id')->unique();
            $table->string('user_id');
            $table->string('invoice_id');
            $table->string('client_id');
            $table->string('reviews');
            $table->string('payment_method');
            $table->date('payment_date');
            $table->decimal('totalpayment');
            $table->string('d_d_no')->nullable();
            $table->string('cheque_no')->nullable();
            $table->timestamps();

             $table->foreign('user_id')->references('userid')->on('users')
                         ->onUpdate('cascade')->onDelete('cascade');
             $table->foreign('invoice_id')->references('invoice_id')->on('invoices')
                         ->onUpdate('cascade')->onDelete('cascade');
             $table->foreign('client_id')->references('customer_id')->on('customers')
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
        Schema::drop('payments');
    }
}
