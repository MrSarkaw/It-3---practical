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
        Schema::create('table_students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->longText('address');
            $table->date('dob');
            $table->json('images');
            $table->double('salary');
            $table->boolean('role');
            $table->text('phone_number');
            $table->mediumText('test');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_students');
    }
};
