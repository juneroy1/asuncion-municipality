<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangayOfficials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangay_officials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('religion')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('course')->nullable();
            $table->text('others')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('is_approved')->nullable();
            $table->string('department')->nullable();
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
        Schema::dropIfExists('barangay_officials');
    }
}
