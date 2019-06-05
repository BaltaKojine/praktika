<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagrindasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {	
        
        Schema::create('paspirtukai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pavadinimas');
            $table->string('aprasymas');
            $table->string('paveikslelis');
            $table->integer('_kaina_');
            $table->timestamps();
        });

        Schema::create('elpaspirtukai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pavadinimas');
            $table->string('aprasymas');
            $table->string('paveikslelis');
            $table->integer('_kaina_');
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
        Schema::dropIfExists('pagrindas');
    }
}
