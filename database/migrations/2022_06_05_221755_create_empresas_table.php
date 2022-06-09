<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
 	        $table->string('nome');
            $table->string('cnpj');
            $table->string('foto');
        });
    }


    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};
