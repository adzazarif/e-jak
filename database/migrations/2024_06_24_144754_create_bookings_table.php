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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('no_uji');
            $table->unsignedBigInteger('lokasi_id');
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal');

            $table->foreign('no_uji')->references('no_uji')->on('kendaraans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lokasi_id')->references('id')->on('lokasis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
