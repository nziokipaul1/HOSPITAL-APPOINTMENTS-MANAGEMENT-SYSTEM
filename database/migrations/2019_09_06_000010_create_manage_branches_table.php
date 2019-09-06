<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageBranchesTable extends Migration
{
    public function up()
    {
        Schema::create('manage_branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('branch_address');
            $table->string('branch_email');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
