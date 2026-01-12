<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150);
            $table->string('logo_image', 1024);
            $table->string('division', 50)->nullable();

            $table->enum('status', ['active', 'training', 'inactive'])
                  ->default('active');

            $table->enum('team_role', ['home_team', 'away_team'])
                  ->nullable();

            $table->foreignId('coach_id')
                  ->nullable()
                  ->constrained('coaches')
                  ->nullOnDelete();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
