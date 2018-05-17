<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('customer_id')->unique();
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('shipaddress');
            $table->string('shipcontact');
            $table->string('shipname');
            $table->string('gst');
            $table->string('profileimg')->default('default.jpg');
            $table->string('customer_email')->unique();
            $table->string('description');
            $table->string('mobile_no');
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
        Schema::drop('customers');
    }
}
