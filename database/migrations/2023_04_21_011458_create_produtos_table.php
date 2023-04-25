<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            //para criar os campos da tabela primeiro indica o $table depois o tipo e por fim o nome da coluna
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->text('descricao');
            //em double estou falando que sera em casas decimais com dois zeros no final
            $table->double('preco', 10, 2);
            $table->string('slug');
            $table->string('image')->nullable();
            //criando a chave estrageira para a tabela usuario
            $table->unsignedBigInteger('id_user');
            // on delete e on cascade serve para deletar os registro de produtos do banco de dados caso a tabela seja excluida
            // para evitar quebrar o banco de dados.
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_produtos');
    }
};
