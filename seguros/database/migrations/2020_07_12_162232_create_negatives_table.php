<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negatives', function (Blueprint $table) 
        {
            $table->id();
            $table->char('nombres', 100);
            $table->char('apellidos',100);
            $table->char('cedula');
            $table->date('fecha_nac');
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
        Schema::dropIfExists('negatives');
    }
}
