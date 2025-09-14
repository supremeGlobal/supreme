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
        Schema::create('content_categories', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

			$table->unique(['company_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_categories');
    }
};
