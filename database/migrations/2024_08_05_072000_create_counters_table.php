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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('founded')->nullable();
            $table->string('teachers')->nullable();
            $table->string('students')->nullable();
            $table->string('staff')->nullable();
            $table->string('branches')->nullable();
            $table->string('campus')->nullable();
            $table->string('bellow_text')->nullable();
            $table->string('button_text')->nullable();
            $table->string('bg')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
