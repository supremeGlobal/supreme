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
        Schema::create('global_pages', function (Blueprint $table) {
            $table->id();
           	$table->longText('aboutUs');
           	$table->longText('aboutUs2');
           	$table->longText('hrm');
           	$table->longText('recruitment');
           	$table->longText('travel');
           	$table->longText('medical');
           	$table->longText('consultancy');
           	$table->longText('construction');
           	$table->longText('operation');
           	$table->longText('choose');			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_pages');
    }
};
