<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();

            $table->foreignId('home_team_id')
                  ->constrained('teams')
                  ->cascadeOnDelete();

            $table->foreignId('away_team_id')
                  ->constrained('teams')
                  ->cascadeOnDelete();

            $table->date('match_date');
            $table->string('location', 150)->nullable();

            $table->enum('status', ['scheduled', 'completed', 'cancelled'])
                  ->default('scheduled');

            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
