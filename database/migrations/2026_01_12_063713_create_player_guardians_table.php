<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('player_guardians', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('father_name', 100)->nullable();
            $table->integer('father_age')->nullable();
            $table->string('father_occupation', 100)->nullable();

            $table->string('mother_name', 100)->nullable();
            $table->integer('mother_age')->nullable();
            $table->string('mother_occupation', 100)->nullable();

            $table->string('guardian_phone', 20)->nullable();
            $table->string('relationship', 50)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('player_guardians');
    }
};
