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
        Schema::create('event', function (Blueprint $table) {
            $table->id("id");
            $table->text('eventname');
            $table->text('name');
            $table->bigInteger('en');
            $table->integer('semname');
            $table->text('division');
            $table->text('complaintdetails');
            // current date auto store થશે
            // $table->date('createdate')->default("19-02-2006");
            // $table->date('createdate')->default("2006-02-19");
            // $table->date('createdate')->useCurrent();
            $table->timestamp('createdt')->useCurrent();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
