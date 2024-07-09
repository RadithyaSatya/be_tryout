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
        Schema::create('soal', function (Blueprint $table) {
            $table->string('id_soal',15)->primary(); 
            $table->string('soal',30); 
            $table->string('gambarsoal', 50)->nullable();
            $table->string('j1b',255);
            $table->string('gj1b',50)->nullable();
            $table->string('j2b',255);
            $table->string('gj2b',50)->nullable();
            $table->string('j3b',255);
            $table->string('gj3b',50)->nullable();
            $table->string('j4b',255);
            $table->string('gj4b',50)->nullable();
            $table->string('j5b',255);
            $table->string('gj5b',50)->nullable();
            $table->string('id_guru',30);
            $table->string('status',20);
            $table->timestamps();
            $table->softDeletes();
        
            // Tambahkan foreign key constraints
            $table->foreign('id_guru')
                  ->references('id_guru')
                  ->on('guru');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal');
    }
};
