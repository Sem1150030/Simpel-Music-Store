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
        Schema::create('music', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('album_id');
            $table->unsignedBigInteger('artist_id');


            $table->string('name');
            $table->timestamp('release_date');
            $table->integer('duraction_sec');

            $table->timestamps();

            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
