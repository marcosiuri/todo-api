<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('creted_by')->constrained('users')->cascadeOnDelete();
            $table->foreignId('responsible_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->string('title');
            $table->string('description');
            $table->string('status');
            $table->enum('priority', ['1', '2', '3', '4', '5'])->default('3')->comment('1 = baixa, 2 = media baixa, 3 = media, 4 = media alta, 5 = alta');
            $table->date('start_date');
            $table->date('close_date')->nullable();
            $table->date('due_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
