<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('performance_records', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')
                  ->constrained('players')
                  ->cascadeOnDelete();

            $table->foreignId('match_id')
                  ->nullable()
                  ->constrained('matches')
                  ->nullOnDelete();

            $table->decimal('rating', 3, 1)->nullable();
            $table->text('notes')->nullable();

            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('performance_records');
    }
};
