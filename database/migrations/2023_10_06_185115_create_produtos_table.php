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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->double('preco', 10,2);
            $table->string('slug');
            $table->string('imagem')->nullable();
            $table->unsignedBigInteger('id_user');//Relacionamento com tabela usuário
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');//Relacionamento com tabela usuário
            $table->unsignedBigInteger('id_categoria');//Relacionamento com tabela categoria
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');//Relacionamento com tabela categoria            
            $table->timestamps();//Criar coluna para registro e para atualização do registro - LOG
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
