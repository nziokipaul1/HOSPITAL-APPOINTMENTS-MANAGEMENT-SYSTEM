<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeServicePivotTable extends Migration
{
    public function up()
    {
        Schema::create('employee_service', function (Blueprint $table) {
            $table->unsignedInteger('service_id');
            $table->foreign('service_id', 'service_id_fk_303751')->references('id')->on('services');
            $table->unsignedInteger('employee_id');
            $table->foreign('employee_id', 'employee_id_fk_303751')->references('id')->on('employees');
        });
    }
}
