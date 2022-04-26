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
        Schema::create('rpkpms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rpkps_id');
            $table->double('scales', 2, 2);
            $table->string('method_offline');
            $table->string('method_online');
            $table->string('time_offline');
            $table->string('time_online');
            $table->string('experience_offline');
            $table->string('experience_online');
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
        Schema::dropIfExists('rpkpms');
    }
};
