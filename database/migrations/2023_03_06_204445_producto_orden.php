<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_orden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');  
            $table->unsignedBigInteger('orden_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('orden_id')->references('id')->on('ordenes');                           
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
        Schema::dropIfExists('cerca');
    }
};
