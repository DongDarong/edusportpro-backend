<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('player_physical_attributes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->integer('height_cm')->nullable();
            $table->integer('weight_kg')->nullable();

            $table->enum('preferred_foot', ['left', 'right'])->nullable();
            $table->string('blood_type', 5)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('player_physical_attributes');
    }
};
