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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->string('no_uji')->unique();
            $table->string('no_kendaraan');
            $table->string('pemilik');
            $table->string('jenis_kendaraan');
            $table->string('no_chasis');   
            $table->string('no_mesin');
            $table->date('masa_berlaku');
            $table->string('status_uji');
            $table->string('no_buku');
            $table->string('jbb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
