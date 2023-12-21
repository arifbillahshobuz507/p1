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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('gmail', 50)->unique();
            $table->string('phone', 14);
            $table->string('password', 300);
            $table->string('role')->nullable();
            $table->string('otp', 20)->nullable();
            $table->string('image', 300)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('age', 50)->nullable();
            $table->string('gender', 50)->nullable();
            $table->date('birtd_day')->nullable();
            $table->longText('description')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
