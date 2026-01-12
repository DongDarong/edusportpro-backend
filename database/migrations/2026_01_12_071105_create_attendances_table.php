<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')
                  ->constrained('players')
                  ->cascadeOnDelete();

            $table->foreignId('match_id')
                  ->nullable()
                  ->constrained('matches')
                  ->cascadeOnDelete();

            $table->foreignId('training_id')
                  ->nullable()
                  ->constrained('trainings')
                  ->cascadeOnDelete();

            $table->enum('attendance_status', ['present', 'absent', 'late']);
            $table->string('note', 255)->nullable();

            $table->timestamp('recorded_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
