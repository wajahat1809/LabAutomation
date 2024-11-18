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
    Schema::table('products', function (Blueprint $table) {
        $table->decimal('price', 10, 2);  // Adding price column
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('price');  // Dropping price column if rolled back
    });
}

};
