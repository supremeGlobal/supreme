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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->tinyText('url');
			$table->tinyText('image');
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->integer('sort_order')->default(0);
            $table->timestamps();
        });

		foreach (config('reference.companies') as $item) {
			DB::table('companies')->updateOrInsert([
				'name' => $item['name'],
				'url' => $item['url'],
				'image' => 'images/logo/' .$item['image'],
				'status' => 'active',
				'sort_order' => false,
				'created_at'  => now(),
				'updated_at'  => now(),
			]);
		}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
