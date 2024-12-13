<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Player;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->bigInteger('post_id')->unsigned();

            $table->foreign('post_id')->references('id')->on('posts')
              ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('player_id')->unsigned();

            $table->foreign('player_id')->references('id')->on('players')
              ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
