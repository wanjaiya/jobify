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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('qualification_id')->constrained('qualifications')->cascadeOnDelete();
            $table->string('field_of_study');
            $table->string('institution_name');
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->string('present')->nullable();
            $table->string('location');
            $table->text('summary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
