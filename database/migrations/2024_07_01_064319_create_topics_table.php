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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 256);
            $table->boolean('is_publish');
            $table->unsignedBigInteger('category_id');
            $table->text('summary');
            $table->text('content');
            $table->dateTime('delivery_at');
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('updated_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
