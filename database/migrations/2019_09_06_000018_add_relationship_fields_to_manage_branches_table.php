<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToManageBranchesTable extends Migration
{
    public function up()
    {
        Schema::table('manage_branches', function (Blueprint $table) {
            $table->unsignedInteger('parent_hospital_id');
            $table->foreign('parent_hospital_id', 'parent_hospital_fk_303687')->references('id')->on('manage_hospitals');
        });
    }
}
