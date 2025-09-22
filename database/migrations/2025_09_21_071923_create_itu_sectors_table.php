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
        Schema::create('itu_sectors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies');  // Foreign key to agencies table
            $table->string('name');  // Sector name
            $table->text('description')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itu_sectors');
    }
};
