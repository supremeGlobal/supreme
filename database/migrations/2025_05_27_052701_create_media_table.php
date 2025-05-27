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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
			$table->string('type'); //Image type: slider, banner, gallery, etc.
			$table->string('title')->nullable();
			$table->text('info')->nullable();
			$table->string('file_path'); // works for image, video, pdf, etc.
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->integer('order_by')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
