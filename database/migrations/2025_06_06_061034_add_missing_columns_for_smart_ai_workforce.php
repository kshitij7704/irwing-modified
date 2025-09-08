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
        // Add missing columns to service_hero_sections
        Schema::table('service_hero_sections', function (Blueprint $table) {
            $table->string('subheading')->nullable()->after('heading');
            $table->json('features')->nullable()->after('image');
        });

        // Add missing columns to service_features_sections
        Schema::table('service_features_sections', function (Blueprint $table) {
            $table->string('subheading')->nullable()->after('heading');
            $table->string('image')->nullable()->after('description');
            $table->string('cta')->nullable()->after('image');
        });

        // Add missing columns to service_features
        Schema::table('service_features', function (Blueprint $table) {
            $table->string('image')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_hero_sections', function (Blueprint $table) {
            $table->dropColumn(['subheading', 'features']);
        });

        Schema::table('service_features_sections', function (Blueprint $table) {
            $table->dropColumn(['subheading', 'image', 'cta']);
        });

        Schema::table('service_features', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
