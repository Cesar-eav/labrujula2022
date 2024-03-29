<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPointIdToArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artistas', function (Blueprint $table) {
        $table->unsignedBigInteger('point_id')->nullable()->after('description');
        $table->foreign('point_id')->references('id')->on('points');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artistas', function (Blueprint $table) {
            //
        });
    }
}
