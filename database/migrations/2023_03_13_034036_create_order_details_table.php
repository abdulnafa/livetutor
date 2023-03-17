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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id')->nullable();
            $table->string('payer_id')->nullable();
            $table->string('payer_email')->nullable();
            $table->float('amount',10,2)->nullable();
            
            $table->string('payment_status')->nullable();
            $table->string('academic_level')->nullable();
            $table->string('type_of_paper')->nullable();
            $table->string('discipline')->nullable();
            $table->string('topic')->nullable();
            $table->string('paper_instruction')->nullable();
            $table->string('additional_material')->nullable();
            $table->string('paper_format')->nullable();
            $table->string('number_of_pages')->nullable();
            $table->string('double_or_single')->nullable();
            $table->string('currency')->nullable();
            $table->string('sources_to_cited')->nullable();
            $table->string('powerpoint_slides')->nullable();
            $table->string('deadline')->nullable();
            $table->string('category_package')->nullable();
           $table->string('userid')->nullable();
           $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
