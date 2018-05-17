<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_id');
            $table->string('name');
            $table->integer('qty');
            $table->decimal('price');
            $table->string('hsn_code');
            $table->decimal('total');
            $table->timestamps();
            $table->foreign('invoice_id')->references('invoice_id')->on('invoices')
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
        Schema::drop('invoice_products');
    }
}
