<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string("tim");
            $table->string("tim_lawan");
            $table->integer("skor_tim")->nullable();
            $table->integer("skor_lawan")->nullable();
            $table->datetime("jadwal_mulai");
            $table->datetime("jadwal_selesai");
            $table->string("studion");
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
        Schema::dropIfExists('jadwals');
    }
}
