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
        Schema::create('allvalues', function (Blueprint $table) {
            $table->id();
            $table->string('academic1')->nullable();
            $table->string('academic2')->nullable();
            $table->string('academic3')->nullable();
            $table->string('academic4')->nullable();
            $table->string('paperformat1')->nullable();
            $table->string('paperformat2')->nullable();
            $table->string('paperformat3')->nullable();
            $table->string('paperformat4')->nullable();
            $table->string('paperformat5')->nullable();
            $table->string('sixhours')->nullable();
            $table->string('twelvehours')->nullable();
            $table->string('twentyfourhours')->nullable();
            $table->string('fortyeighthours')->nullable();
            $table->string('threedays')->nullable();
            $table->string('fivedays')->nullable();
            $table->string('sevendays')->nullable();
            $table->string('standard')->nullable();
            $table->string('premimum')->nullable();
            $table->string('platinum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allvalues');
    }
};
