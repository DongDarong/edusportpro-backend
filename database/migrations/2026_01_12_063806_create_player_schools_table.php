<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('player_schools', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('school_name', 150)->nullable();
            $table->string('grade', 50)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('player_schools');
    }
};
