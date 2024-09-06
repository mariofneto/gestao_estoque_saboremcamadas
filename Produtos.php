<?php

class Produtos
{
    public int $id;
    public string $nome;
    public float $preco;
    public string $tamanhoEmSigla; // P = PEQUENO  |  M = MEDIO   | G = GRANDE
    /*
    function __construct(int $id, string $nome, float $preco, string $tamanhoEmSigla)
    {
        mostrarTemplate();
        $this->$id = $id;
        $this->$nome = $nome;
        $this->$preco = $preco;
        $this->$tamanhoEmSigla = $tamanhoEmSigla;
    }
    */
    function __construct()
    {
        //mostrarTemplate();
    }

    function escolhas()
    {
        echo "{1} -> Listar Tabela de Produtos\n";
        echo "{2} -> Criar Produtos\n";
        echo "{1} -> Editar Produtos\n";
        echo "{1} -> Deletar Produtos\n";
    }
}
