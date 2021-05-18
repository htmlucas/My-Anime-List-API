<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150)->comment('Campo nome do usuario');
            $table->string('nickname',100)->comment('Campo Nickname do usuario');
            $table->string('imagem_perfil',255)->nullable();
            $table->date('data_nascimento',45);
            $table->string('descricao_perfil',255)->nullable()->comment('Descrição do usuario');
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
        Schema::dropIfExists('usuarios');
    }
}
