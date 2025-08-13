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
        Schema::create('email_us', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('email');
			$table->string('mobile');
			$table->string('subject');
			$table->longText('message');
			$table->enum('status', ['unseen', 'seen'])->default('unseen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_us');
    }
};
