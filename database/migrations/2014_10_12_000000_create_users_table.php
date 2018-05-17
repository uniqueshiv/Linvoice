<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userid')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('mobile');
            $table->string('cin');
            $table->string('commissionerate');
            $table->string('gst');
            $table->string('pannumber');
            $table->string('logo')->default('default.png');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('bankname');
            $table->string('beneficiarynum');
            $table->string('beneficiary_name');
            $table->string('beneficiaryifsc');
            $table->string('beneficiaryswift');
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
        Schema::drop('users');
    }
}
