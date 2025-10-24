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
        Schema::table('attendances', function (Blueprint $table){
                $table->timestamp('punch_in')->nullable();
                $table->timestamp('punch_out')->nullable();
                $table->integer('late_minutes')->default(0);
                $table->integer('overtime_minutes')->default(0);
                $table->integer('production_minutes')->default(0);
                $table->enum('status', ['present', 'absent'])->default('absent');
                $table->enum('work_mode', ['office', 'remote', 'other'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('attendances', function (Blueprint $table) {
            $table->dropColumn(['user_id','punch_in','punch_out','status', 'late_minutes', 'overtime_minutes', 'production_minutes', 'work_mode']);
        });
    }
};
