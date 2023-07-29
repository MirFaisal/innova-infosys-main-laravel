<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     * 
     * 
     * 
     * 
     * 
     * 
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->nullable();
            $table->string('display_name')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('nid_card_number')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('erbn')->nullable();
            $table->string('department')->nullable();
            $table->string('current_position')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('ending_date')->nullable();
            $table->date('id_card_issue_date')->nullable();
            $table->date('id_card_expiry_date')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};