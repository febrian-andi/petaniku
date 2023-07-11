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
        Schema::create('alurs', function (Blueprint $table) {
            $table->id('id_alur', 4);
            $table->unsignedBigInteger('id_panduan');
            $table->string('nama_alur', 40);
            $table->string('lahan',30);
            $table->foreign('id_panduan')->references('id_panduan')->on('panduans')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('pengingat_tgl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alurs');
    }
};
