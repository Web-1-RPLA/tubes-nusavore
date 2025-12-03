<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
        $table->id('reservation_id');

        $table->unsignedBigInteger('table_id');
        $table->unsignedBigInteger('user_id');

        $table->date('reservation_date');
        $table->time('reservation_time');
        $table->integer('guest_count');

        $table->foreign('table_id')
            ->references('table_id')
            ->on('mejas')      // ← WAJIB: mejas
            ->onDelete('cascade')
            ->onUpdate('cascade');

        $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        $table->timestamps();
    });

    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
