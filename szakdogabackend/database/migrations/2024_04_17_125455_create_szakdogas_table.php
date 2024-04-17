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
        Schema::create('szakdogas', function (Blueprint $table) {
            $table->id();
            $table->string('szakdoga_nev');
            $table->link('githublink');
            $table->link('oldallink');
            $table->string('tagok_neve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szakdogas');
    }
};
