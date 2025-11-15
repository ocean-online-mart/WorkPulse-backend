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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamp('punch_in');
            $table->timestamp('punch_out')->nullable();
            $table->integer('late_hours')->default(0);
            $table->integer('overtime_minutes')->default(0);
            $table->integer('production_minutes')->default(0);
            $table->enum('status', ['present', 'absent'])->default('absent');
            $table->enum('work_mode', ['office', 'remote', 'other'])->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
  