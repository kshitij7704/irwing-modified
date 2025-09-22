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
        Schema::create('itu_sector_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sector_id')->constrained('itu_sectors');  // Foreign key to itu_sectors table
            $table->string('name');  // Group name
            $table->text('description')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itu_sector_groups');
    }
};
