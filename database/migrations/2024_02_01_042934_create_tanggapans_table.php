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
        Schema::create('tanggapans', function (Blueprint $table) {
            $table->id('id_tanggapans');
            $table->foreignId('id_pengaduans')->references('id')->on('pengaduans');
            $table->date('tanggal_tanggapans');
            $table->text('tanggapans');
            $table->foreignId('id_petugases')->constraind('petugases', 'id_petugases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
