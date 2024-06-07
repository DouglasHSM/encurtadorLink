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
        Schema::create('tabela', function (Blueprint $table) {
            $table->id();
            $table->string('path',255);
            $table->string('url',255);
            $table->datetime('tempo_limite');
            $table->string('user_hash',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabela');;
    }
};
