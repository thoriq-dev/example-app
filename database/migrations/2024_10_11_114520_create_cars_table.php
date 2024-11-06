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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->string('engine');         // Kolom engine
            $table->integer('power');
            $table->string('fuel_type');
            $table->integer('seating_capacity');
            $table->text('description');
            $table->string('image');
            $table->timestamps();            // Menambahkan created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn(['engine', 'power', 'fuel_type', 'seating_capacity', 'description']);
        });
    }
};
