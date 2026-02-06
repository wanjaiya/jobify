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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('summary')->nullable();
            $table->longText('description');

            $table->enum('location_type', ['onsite', 'remote', 'hybrid']);
            $table->string('location')->nullable();
            $table->enum('employment_type', ['full_time', 'part_time', 'contract', 'internship']);

            $table->enum('experience_level', ['junior', 'mid', 'senior', 'lead'])->nullable();
            $table->unsignedTinyInteger('min_experience_years')->nullable();
            $table->decimal('salary_min', 12, 2)->nullable();
            $table->decimal('salary_max', 12, 2)->nullable();
            $table->string('salary_currency', 3)->default('KES');
            $table->enum('salary_period', ['monthly', 'yearly'])->nullable();
            $table->boolean('salary_visible')->default(false);

            $table->enum('status', ['draft', 'published', 'paused', 'closed'])->default('draft');
            $table->boolean('is_featured')->default(false);
            $table->timestamp('featured_until')->nullable();

            $table->unsignedInteger('views_count')->default(0);
            $table->unsignedInteger('applications_count')->default(0);

            $table->timestamp('published_at')->nullable();
            $table->timestamp('expires_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
