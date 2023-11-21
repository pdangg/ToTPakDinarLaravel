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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama');
            $table->integer("nis");
            $table->enum('jenis_kelamin', ['P', 'L'])->nullable();
            $table->enum('fase_kelas', ['E', 'F'])->nullable();
            $table->string('program_keahlian');
            $table->longText('alamat');});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
