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
            $table->string('id_guru',15)->primary();
            $table->string('nama',35);
            $table->date('tgl_lahir');
            $table->string('jk',1);
            $table->string('alamat',255);
            $table->string('no_telp',15);
            $table->string('foto',40);
            $table->string('matpel',20);
            $table->timestamps();
            $table->softDeletes();

            // References to Table user
            $table->foreign('id_guru')
            ->references('username')
            ->on('users');  
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
