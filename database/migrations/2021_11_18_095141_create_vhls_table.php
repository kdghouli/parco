<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVhlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vhls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule');
            $table->string('marque');
            $table->string('type');
            $table->string('puissance');
            $table->string('genre');
            $table->string('dmc');
            $table->string('intitule');
            $table->string('agence');
            $table->string('chassis');
            $table->boolean('eccbc');
            $table->boolean('active');
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
        Schema::dropIfExists('vhls');
    }
}
