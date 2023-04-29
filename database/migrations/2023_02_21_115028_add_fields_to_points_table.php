<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('points', function (Blueprint $table) {

            //$table->unsignedBigInteger('ubication_id')->nullable();
            //$table->foreign('ubication_id')->references('id')->on('ubications');

            //$table->unsignedBigInteger('artist_id')->nullable();
            //$table->foreign('artist_id')->references('id')->on('artistas');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('points', function (Blueprint $table) {
            //
        });
    }
}
