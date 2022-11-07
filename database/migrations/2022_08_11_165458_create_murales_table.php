<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murales', function (Blueprint $table) {
            $table->id();
            $table->string('cerro');
            $table->string('direccion');
            $table->string('artista');
            $table->string('path_imagen');
            $table->mediumText('descripcion')->nullable();;
            $table->string('instagram')->nullable();
            $table->string('lat');
            $table->string('long');
            $table->boolean('publicidad')->default(false);
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
        Schema::dropIfExists('murales');
    }
}
