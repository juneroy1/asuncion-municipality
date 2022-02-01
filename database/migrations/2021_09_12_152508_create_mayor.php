<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMayor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mayor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position');
            $table->string('address');
            $table->date('birthdate');
            $table->string('religion');
            $table->string('educational_attainment');
            $table->string('course');
            $table->text('others');
            $table->integer('user_id');
            $table->integer('is_approved');
            $table->string('department');
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
        Schema::dropIfExists('mayor');
    }
}
