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
        Schema::create('jadwalkuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kodemk')->unique();
            $table->string('matakuliah');
            $table->string('dosen');
            $table->string('jam');
            $table->integer('ruangan');
            $table->string('hari');
            $table->string('prodi');
            $table->string('angkatan');
            $table->integer('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalkuliahs');
    }
};
