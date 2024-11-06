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
        Schema::table('companies', function (Blueprint $table) {
            $table->string('city')->nullable()->after('email');
            $table->string('country')->nullable()->after('city');
            $table->string('postcode')->nullable()->after('country');
            $table->string('vat_id')->nullable()->after('postcode');
            $table->string('company_number')->nullable()->after('vat_id');
            $table->softDeletes()->after('company_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
};
