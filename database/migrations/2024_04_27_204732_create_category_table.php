<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_sv')->nullable(); // Swedish language translation
            $table->string('color')->nullable(); // HEX value for color
            $table->integer('sort')->default(0); // Sorting field
            $table->timestamps();
            $table->softDeletes();

            // You can add other fields as needed
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
}
