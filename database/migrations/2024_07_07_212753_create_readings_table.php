<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained('users');
            $table->string('author');
            $table->string('gender_author');
            $table->integer('pages')->nullable();
            $table->string('publisher')->nullable();
            $table->string('translator')->nullable();
            $table->string('country')->nullable();
            $table->integer('year')->nullable();
            $table->string('month')->nullable();
            $table->string('format');
            $table->string('gender_literary')->nullable();
            $table->integer('note')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('readings');
    }
};
