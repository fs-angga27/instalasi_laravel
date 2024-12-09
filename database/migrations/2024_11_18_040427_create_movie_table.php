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
        Schema::create('movie', function (Blueprint $table) {
            $table->integer("id")->primary();
            $table->string("title" ,100);
            $table->float("voteavarage");
            $table->string("overview");
            $table->string("poster_path");
            $table->integer("category_id");
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('catefory');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};