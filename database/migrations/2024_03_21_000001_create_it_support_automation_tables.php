<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Hero section
        Schema::create('it_support_hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('description');
            $table->string('image');
            $table->string('cta_text');
            $table->string('cta_link');
            $table->timestamps();
        });

        // Features section
        Schema::create('it_support_features', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('title');
            $table->text('description');
            $table->string('cta_text');
            $table->string('cta_link');
            $table->timestamps();
        });

        // Stats section
        Schema::create('it_support_stats', function (Blueprint $table) {
            $table->id();
            $table->string('stat_number');
            $table->string('stat_label');
            $table->timestamps();
        });

        // Testimonials section
        Schema::create('it_support_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('stat_number');
            $table->string('stat_label');
            $table->text('testimonial');
            $table->timestamps();
        });

        // FAQ section
        Schema::create('it_support_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });

        // CTA section
        Schema::create('it_support_cta_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('description');
            $table->string('cta_text');
            $table->string('cta_link');
            $table->string('background_image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('it_support_cta_sections');
        Schema::dropIfExists('it_support_faqs');
        Schema::dropIfExists('it_support_testimonials');
        Schema::dropIfExists('it_support_stats');
        Schema::dropIfExists('it_support_features');
        Schema::dropIfExists('it_support_hero_sections');
    }
}; 