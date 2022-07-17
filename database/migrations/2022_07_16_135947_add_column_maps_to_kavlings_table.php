<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnMapsToKavlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kavlings', function (Blueprint $table) {
            $table->integer('kecamatan')->nullable();
            $table->string('location')->nullable();
            $table->text('spesification')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kavlings', function (Blueprint $table) {
            //
        });
    }
}
