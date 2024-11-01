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
        Schema::create('club_umpire', function (Blueprint $table) {
            $table->primary(['club_id', 'umpire_id']);
            $table->bigInteger('club_id')->unsigned();
            $table->bigInteger('umpire_id')->unsigned();
            $table->timestamps();

            $table->foreign('club_id')->references('id')->on('clubs')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('umpire_id')->references('id')->on('umpires')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_umpire');
    }
};
