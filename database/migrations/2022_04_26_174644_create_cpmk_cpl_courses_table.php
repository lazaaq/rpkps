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
        Schema::create('cpmk_cpl_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rpkps_id');
            $table->unsignedBigInteger('cpl_course_id');
            $table->unsignedBigInteger('cpmk_id');
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
        Schema::dropIfExists('cpmk_cpl_courses');
    }
};
