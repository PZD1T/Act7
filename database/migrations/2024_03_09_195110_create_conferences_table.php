<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('Conferences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('conf');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Conferences');
    }
};
