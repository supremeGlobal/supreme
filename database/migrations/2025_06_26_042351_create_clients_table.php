<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('image')->nullable();
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });

		foreach (config('reference.clients') as $name) {
			DB::table('clients')->updateOrInsert([
				'name' => $name,
			]);
		}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
