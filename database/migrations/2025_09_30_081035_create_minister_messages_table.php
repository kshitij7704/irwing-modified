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
        Schema::create('minister_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Minister’s name
            $table->string('title'); // e.g. Minister of Communications
            $table->string('photo'); // path to uploaded image
            $table->text('message')->nullable(); // message text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minister_messages');
    }
};
