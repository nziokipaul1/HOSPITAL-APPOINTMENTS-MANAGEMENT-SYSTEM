<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedInteger('client_id');
            $table->foreign('client_id', 'client_fk_303841')->references('id')->on('users');
            $table->unsignedInteger('service_booked_id');
            $table->foreign('service_booked_id', 'service_booked_fk_303842')->references('id')->on('services');
            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id', 'doctor_fk_303843')->references('id')->on('employees');
            $table->unsignedInteger('hospital_id');
            $table->foreign('hospital_id', 'hospital_fk_303844')->references('id')->on('manage_hospitals');
            $table->unsignedInteger('branch_id')->nullable();
            $table->foreign('branch_id', 'branch_fk_303846')->references('id')->on('manage_branches');
        });
    }
}
