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
        Schema::create('map_data', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('main_data_id')->nullable()->constrained('main_data')->onDelete('cascade');
            $table->enum('reason', ['a', 'b', 'c'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('map_data');
    }
};
