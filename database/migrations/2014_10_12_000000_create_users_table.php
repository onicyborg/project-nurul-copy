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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['pria', 'wanita'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('email')->unique();
            $table->string('nomor_hp')->nullable();
            $table->string('password');
            $table->string('pendidikan_terakhir')->nullable();
            $table->text('alamat')->nullable();
            $table->text('file_cv')->nullable();
            $table->text('file_foto')->nullable();
            $table->text('file_dokumen_pendukung')->nullable();
            $table->enum('role', ['hrd', 'kandidat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
