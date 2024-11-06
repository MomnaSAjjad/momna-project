<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('position')->nullable();
            $table->string('region')->nullable();
            $table->string('telephone')->nullable();
            $table->string('user_type')->nullable();
            $table->string('status')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('position');
            $table->dropColumn('region');
            $table->dropColumn('telephone');
            $table->dropColumn('user_type');
            $table->dropColumn('status');
        });
    }
};
