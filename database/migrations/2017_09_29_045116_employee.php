<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name',50);
            $table->string('designation');
            $table->string('department');
            $table->string('address',190);
            $table->string('dob',10);
            $table->string('aadhar',12);
            $table->string('bloodgroup',5);
            $table->string('mobile',12);
            $table->string('email',50);
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
        Schema::dropIfExists('employee');
    }
}
