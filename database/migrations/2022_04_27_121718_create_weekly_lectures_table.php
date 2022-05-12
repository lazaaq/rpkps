<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_lectures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecturer_plotting_id');
            $table->unsignedBigInteger('study_room_id');
            $table->integer('meeting');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('study_material');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weekly_lectures');
    }
};
