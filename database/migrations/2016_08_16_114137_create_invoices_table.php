<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('invoice_id')->unique();
            $table->string('invoice_no');
            $table->string('transmode');
            $table->string('veh_no');
            $table->string('p_of_sup');
            $table->dateTime('date_of_sup');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->string('title');
            $table->string('client_id');
            $table->decimal('sub_total');
            $table->decimal('fcharges');
            $table->decimal('lpcharges');
            $table->decimal('insurcharges');
            $table->decimal('other');
            $table->decimal('grand_total');
            $table->decimal('tax');
            $table->timestamps();

            $table->foreign('user_id')->references('userid')->on('users')
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
        Schema::drop('invoices');
    }
}
