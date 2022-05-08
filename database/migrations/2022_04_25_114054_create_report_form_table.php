<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReportFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_form', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('collector_id');
            $table->string('report');
        });
        DB::statement("INSERT INTO areas(areaName) values ('Spintex')");
        DB::statement("INSERT INTO areas(areaName) values ('Achimota')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_form');
    }
}
