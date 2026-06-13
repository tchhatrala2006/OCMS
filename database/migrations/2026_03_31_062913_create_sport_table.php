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
        Schema::create('sport', function (Blueprint $table) {
           $table->id("id");
            $table->text('sportname');
            $table->text('name');
            $table->bigInteger('en');
             $table->integer('semname');
            $table->text('division');
            $table->text('complaintdetails');
            $table->timestamp('createdt')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport');
    }
};
