<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnOfficials extends Migration
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
            $table->string('elective_title_experience')->nullable();
            $table->string('eb_primary')->nullable();
            $table->string('eb_secondary')->nullable();
            $table->string('eb_college')->nullable();
            $table->string('chairmanship')->nullable();
            $table->string('vice_chairmanship')->nullable();
            $table->string('committee_membership')->nullable();
            $table->string('quotation')->nullable();
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
        });
    }
}
