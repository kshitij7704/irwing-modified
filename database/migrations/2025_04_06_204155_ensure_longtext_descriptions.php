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
        Schema::table('service_hero_sections', function (Blueprint $table) {
            $table->longText('description')->change();
        });

      
        
        Schema::table('service_about_sections', function (Blueprint $table) {
            $table->longText('description')->change();
        });
        
        Schema::table('service_agent_support_sections', function (Blueprint $table) {
            $table->longText('description')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('service_hero_sections', function (Blueprint $table) {
            $table->text('description')->change();
        });
        
        Schema::table('service_about_sections', function (Blueprint $table) {
            $table->text('description')->change();
        });
        
        Schema::table('service_agent_support_sections', function (Blueprint $table) {
            $table->text('description')->change();
        });

        
    }
};