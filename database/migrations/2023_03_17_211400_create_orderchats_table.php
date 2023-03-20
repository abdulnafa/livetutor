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
        Schema::create('orderchats', function (Blueprint $table) {
            $table->id();
            $table->integer("sender_id")->nullable();
            $table->string("recipent")->nullable();
            $table->string("message")->nullable();
            $table->string('document')->nullable();
            $table->integer('orderid')->nullable();
            $table->string('person')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderchats');
    }
};
