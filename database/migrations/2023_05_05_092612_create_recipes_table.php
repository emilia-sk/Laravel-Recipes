<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');//if we have a user that created some recipes, when that user is deleted, the recipes will also be deleted(cascaded);
            $table->string('title');
            $table->string('picture')->nullable();
            $table->string('author');
            $table->Integer('time');
            $table->longText('description');
            $table->string('ingredients');
            $table->longText('directions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
