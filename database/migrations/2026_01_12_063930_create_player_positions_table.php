<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('player_positions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('primary_position', 50)->nullable();
            $table->string('secondary_position', 50)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('player_positions');
    }
};
