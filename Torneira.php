<?php
include_once 'Produto.php';

class Torneira extends Produto
{
    private int $diametro;
    private bool $tipoUmQuarto;

    function abrir()
    {
        echo 'saindo água...';
    }

    function fechar()
    {
        echo 'sem água';
    }

    function __get($p){return $this->$p;}
    function __set($p, $v){$this->$p = $v;}

    function __construct(string $material, string $cor, string $marca, string $acabamento, int $diametro, bool $tipoUmQuarto)
    {
        parent::__construct($material, $cor, $marca, $acabamento);
        $this->diametro = $diametro;
        $this->tipoUmQuarto = $tipoUmQuarto;
    }
}
