<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableDepartmentFunctionalities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_functionalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->string('department');
            $table->integer('user_id');
            $table->integer('is_approved');
            // description
            // department
            // user_id
            // is_approved
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
        Schema::dropIfExists('department_functionalities');
    }
}
