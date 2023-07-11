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
        Schema::create('materies', function (Blueprint $table) {
            $table->id('id_materi', 1);
            $table->unsignedBigInteger('id_panduan');
            $table->foreign('id_panduan')->references('id_panduan')->on('panduans')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tahapan',70);
            $table->longText('isi');
            $table->date('aturan_jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materies');
    }
};
