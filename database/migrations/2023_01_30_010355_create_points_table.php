<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->string('direction');
            $table->string('image');
            $table->decimal('lat');
            $table->decimal('lon');
            $table->boolean('publicity')->default(false);
            $table->unsignedBigInteger('ubication_id');
            $table->foreign('ubication_id')->references('id')->on('ubications');

            $table->mediumText('description')->nullable();
            $table->unsignedBigInteger('artist_id')->nullable();
            $table->foreign('artist_id')->references('id')->on('artistas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
