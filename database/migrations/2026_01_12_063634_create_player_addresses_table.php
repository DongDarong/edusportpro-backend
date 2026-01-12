<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('player_addresses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('village', 100)->nullable();
            $table->string('commune', 100)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('province', 100)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('player_addresses');
    }
};
