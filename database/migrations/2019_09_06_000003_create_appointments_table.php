<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date_and_time');
            $table->boolean('is_completed')->default(0)->nullable();
            $table->datetime('rescheduled_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
