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
        Schema::create('guru', function (Blueprint $table) {
            $table->string('id_guru',30)->primary();
            $table->string('nama',35);
            $table->date('tgl_lahir');
            $table->string('jk',1);
            $table->string('alamat',255);
            $table->string('no_telp',30);
            $table->string('foto',40);
            $table->string('matpel',20);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
