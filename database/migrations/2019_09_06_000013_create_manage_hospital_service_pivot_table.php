<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageHospitalServicePivotTable extends Migration
{
    public function up()
    {
        Schema::create('manage_hospital_service', function (Blueprint $table) {
            $table->unsignedInteger('service_id');
            $table->foreign('service_id', 'service_id_fk_303750')->references('id')->on('services');
            $table->unsignedInteger('manage_hospital_id');
            $table->foreign('manage_hospital_id', 'manage_hospital_id_fk_303750')->references('id')->on('manage_hospitals');
        });
    }
}
