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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('test_id', 12)->unique(); // 12-digit test code
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('type'); // Type of testing
            $table->text('criteria'); // Criteria of testing
            $table->string('result'); // Pass/Fail
            $table->text('remarks')->nullable();
            $table->string('tested_by')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
