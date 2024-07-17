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
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->string('manufacturer');
            $table->string('clocl_speed');
            $table->string('cores');
            $table->string('threads');
            $table->string('architecture');
            $table->date('release_date');
            $table->string('tdp');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cruds');
    }
};
