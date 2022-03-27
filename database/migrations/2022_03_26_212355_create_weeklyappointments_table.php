<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyappointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeklyappointments', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_week');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('collector_id')->constrained();
            $table->integer('house_number');
            $table->string('landmark', 255);
            $table->string('status');
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
        Schema::dropIfExists('weeklyappointments');
    }
}
