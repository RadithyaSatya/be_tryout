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
            $table->string("nis",15)->primary();
            $table->string('name');
            $table->date("tgl_lahir");
            $table->char("jk");
            $table->text("alamat");
            $table->string("jurusan",3);
            $table->string("kelas",10);
            $table->string("ws1",35);
            $table->string("ws2",35);
            $table->string("tws1",13);
            $table->string("tws2",13);
            $table->string("ts",13);
            $table->string("foto",255);
            $table->string("username",15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
