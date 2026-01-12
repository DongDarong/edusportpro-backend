<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('match_results', function (Blueprint $table) {
            $table->foreignId('match_id')
                  ->constrained('matches')
                  ->cascadeOnDelete()
                  ->primary();

            $table->integer('home_goals')->default(0);
            $table->integer('away_goals')->default(0);

            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('match_results');
    }
};
