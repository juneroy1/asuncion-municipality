<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakePriorityNullableOfficials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('officials', function (Blueprint $table) {
            //
            $table->integer('priority')->nullable()->default(null)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('officials', function (Blueprint $table) {
            //
            $table->integer('priority')->nullable()->default(null)->change();

        });
    }
}
