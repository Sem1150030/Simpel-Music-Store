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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('born')->nullable();
            $table->string('died')->nullable();
            $table->string('label')->nullable();
            $table->string('mood')->nullable();
            $table->string('style')->nullable();
            $table->string('genre')->nullable();
            $table->text('bio')->nullable();
            $table->string('gender')->nullable();
            $table->string('logoIMG')->nullable();
            $table->string('pfIMG')->nullable();
            $table->string('bannerIMG')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
