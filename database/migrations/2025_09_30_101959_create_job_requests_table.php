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
		Schema::create('job_requests', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('job_id');
			$table->string('name');
			$table->string('email')->nullable();     // applicant email
			$table->string('mobile');
			$table->string('file')->nullable();      // CV/resume file path
			$table->enum('status', ['pending', 'reviewed', 'accepted', 'rejected'])->default('pending');
			$table->timestamps();

			$table->foreign('job_id')->references('id')->on('job_lists')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_requests');
    }
};
