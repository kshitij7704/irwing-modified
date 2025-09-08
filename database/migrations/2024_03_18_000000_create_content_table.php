<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Main services table
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // e.g. 'voice-agents'
            $table->string('title');
            $table->timestamps();
        });

        // Hero section table - Corrected: using longText() without ->change()
        Schema::create('service_hero_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('heading');
            $table->longText('description'); // Changed to longText for unlimited length
            $table->string('image');
            $table->string('cta')->nullable();
            $table->timestamps();
        });

        // Features section header table
        Schema::create('service_features_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('heading');
            $table->text('description');
            $table->timestamps();
        });

        // Individual features table
        Schema::create('service_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('features_section_id')->constrained('service_features_sections')->onDelete('cascade');
            $table->string('icon');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });

        // About section table
        Schema::create('service_about_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('image');
            $table->string('subheading');
            $table->string('heading');
            $table->text('description');
            $table->json('features');
            $table->timestamps();
        });

        // Agent support section table
        Schema::create('service_agent_support_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('image');
            $table->string('subheading');
            $table->string('heading');
            $table->text('description');
            $table->json('features');
            $table->timestamps();
        });


        // Proactive section table
        Schema::create('service_proactive_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('image');
            $table->string('subheading');
            $table->string('heading');
            $table->text('description');
            $table->json('features'); // To hold cards: icon, title, description
            $table->timestamps();
        });

        Schema::create('performance_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('stats')->nullable(); // ✅ Add this line
            $table->timestamps();
    
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });   


        Schema::create('vidhira_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('title');
            $table->text('subtitle');
            $table->text('description');
            $table->string('background_image');
            $table->timestamps();
        });

        Schema::create('ai_powered_engagement_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('title');
            $table->text('subtitle');
            $table->json('features');
            $table->timestamps();
        });

        Schema::create('ai_business_interaction_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('title');
            $table->json('features');
            $table->timestamps();
        });


        Schema::create('ai_statistical_highlights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->json('stats');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('ai_statistical_highlights');
        Schema::dropIfExists('ai_business_interaction_sections');
        Schema::dropIfExists('ai_powered_engagement_sections');
        Schema::dropIfExists('vidhira_sections');
        Schema::dropIfExists('performance_stats');
        Schema::dropIfExists('service_proactive_sections');
        Schema::dropIfExists('service_agent_support_sections');
        Schema::dropIfExists('service_about_sections');
        Schema::dropIfExists('service_features');
        Schema::dropIfExists('service_features_sections');
        Schema::dropIfExists('service_hero_sections');
        Schema::dropIfExists('services');
    }
};