<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('agricultores', function (Blueprint $table) {
            $table->id();
 	        $table->string('nome');
            $table->string('descricao');
            $table->string('foto');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};
