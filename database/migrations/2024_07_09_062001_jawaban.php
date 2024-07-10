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
        Schema::create('jawaban', function (Blueprint $table) {
            $table->string('id',20)->primary();
            $table->string('id_test',30);
            $table->string('id_soal',30);
            $table->string('jawaban',255);
            $table->string('gambarjawaban',50)->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            // References to table test
            $table->foreign('id_test')
            ->references('id_test')
            ->on('test');

            // References to table test
            $table->foreign('id_soal')
            ->references('id_soal')
            ->on('soal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban');
    }
};
