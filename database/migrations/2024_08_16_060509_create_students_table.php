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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grade_id')->nullable();
            $table->string('full_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->string('nationality')->nullable();
            $table->enum('religion',['Muslim', 'Hindu', 'Christian', 'Buddhu'])->nullable();
            $table->text('present_address')->nullable();
            $table->string('previous_institution')->nullable();
            $table->text('message')->nullable();
            $table->string('photo')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contact')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_designation')->nullable();
            $table->enum('mother_education',['SSC','HSC', 'Graduation','Post_Graduation'])->nullable();
            $table->string('mother_photo')->nullable();
            $table->text('mother_office_address')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_designation')->nullable();
            $table->enum('father_education',['SSC','HSC', 'Graduation','Post_Graduation'])->nullable();
            $table->string('father_photo')->nullable();
            $table->text('father_office_address')->nullable();
            $table->enum('payment_option', ['Pay_Now', 'Pay_Later'])->nullable();
            $table->boolean('agreed_to_terms')->default(false)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
