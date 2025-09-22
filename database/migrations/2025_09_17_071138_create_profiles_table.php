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
        Schema::create('profiles', function (Blueprint $table) {
    $table->id();
    $table->string('year_of_allotment')->nullable();
    $table->string('date_of_entry_in_service')->nullable();
    $table->string('staff_no')->nullable();
    $table->string('officer_name')->nullable();
    $table->string('present_posting')->nullable();
    $table->string('office_address')->nullable();
    $table->string('date_of_joining_office')->nullable();
    $table->string('office_phone')->nullable();
    $table->string('office_fax')->nullable();
    $table->string('office_email')->nullable();
    $table->string('date_of_birth')->nullable();
    $table->string('native_district')->nullable();
    $table->string('state')->nullable();
    $table->string('educational_qualifications')->nullable();
    $table->string('languages_known')->nullable();
    $table->string('date_of_entry_in_present_grade')->nullable();
    $table->string('grade')->nullable();
    $table->string('level_in_pay_matrix')->nullable();
    $table->string('mobile_no')->nullable();
    $table->string('email_id')->nullable();
    $table->string('language')->nullable();
    $table->string('serving_status')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
