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
        Schema::create('klasemen_bcewe', function (Blueprint $table) {
            $table->id();
            $table->integer("gol");
            $table->unsignedBigInteger("kelas_id");
            $table->foreign("kelas_id")->references("id")->on('kelases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klasemen_bcewe');
    }
};
