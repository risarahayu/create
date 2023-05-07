<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHourCloseToVetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vets', function (Blueprint $table) {
            $table->string('hourClose')->nullable();
            $table->boolean('fullDay')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vets', function (Blueprint $table) {
            $table->dropCoumn('hourClose');
            $table->dropCoumn('fullDay');
        });
    }
}
