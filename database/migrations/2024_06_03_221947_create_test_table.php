<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->integer('soal_1');
            $table->integer('soal_2');
            $table->integer('soal_3');
            $table->integer('soal_4');
            $table->integer('soal_5');
            $table->integer('soal_6');
            $table->integer('soal_7');
            $table->integer('soal_8');
            $table->integer('soal_9');
            $table->integer('soal_10');
            $table->integer('soal_11');
            $table->integer('soal_12');
            $table->integer('soal_13');
            $table->integer('soal_14');
            $table->integer('soal_15');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test');
    }
};
