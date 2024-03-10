<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('Teams', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->foreignId('id_city')->references('id')->on('Cities');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Teams');
    }
};
