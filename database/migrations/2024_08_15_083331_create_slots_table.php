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
        Schema::create('slots', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
<<<<<<< HEAD:database/migrations/2024_08_15_083331_create_slots_table.php
            $table->timestamp('time')->nullable();
            $table->string('status')->nullable();
=======
            $table->string('image')->nullable();

>>>>>>> 0e467c40c5de52c111ad93722707909a2d07c71f:database/migrations/2024_08_14_073535_create_missions_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slots');
    }
};
