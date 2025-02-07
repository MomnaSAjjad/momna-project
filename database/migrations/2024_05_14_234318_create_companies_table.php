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
	Schema::create('companies', function (Blueprint $table) {
    		$table->id();
    		$table->string('name');
    		$table->string('email')->nullable();
   		    $table->unsignedBigInteger('owner_id');
    		$table->foreign('owner_id')->references('id')->on('users');
    		// Add other fields here: phone_number, VAT_number, city, country, comment
    		$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
