<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropForeignInArtistPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artist_point', function (Blueprint $table) {
            $table->dropForeign('artist_point_artist_id_foreign');
            $table->dropForeign('artist_point_point_id_foreign');
            
            $table->foreign('artist_id')->references('id')->on('artistas')->onDelete('cascade');
            $table->foreign('point_id')->references('id')->on('points')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artist_point', function (Blueprint $table) {
            //
        });
    }
}
