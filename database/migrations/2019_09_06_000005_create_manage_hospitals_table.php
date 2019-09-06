<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageHospitalsTable extends Migration
{
    public function up()
    {
        Schema::create('manage_hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
