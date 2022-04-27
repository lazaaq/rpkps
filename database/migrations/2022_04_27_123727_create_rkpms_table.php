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
        Schema::create('rkpms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('weekly_lecture_id');
            $table->unsignedBigInteger('rpkpm_id');
            $table->boolean('appropriate');
            $table->enum('well_used', ['Kurang', 'Cukup', 'Baik', 'Sangat Baik']);
            $table->boolean('method');
            $table->boolean('experience');
            $table->boolean('media');
            $table->text('critics');
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
        Schema::dropIfExists('rkpms');
    }
};
