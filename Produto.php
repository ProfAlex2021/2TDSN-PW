<?php
class Produto{
    protected string $material;
    protected string $cor;
    protected string $marca;
    protected string $acabamento;

    function __get($propriedade){
        return $this->$propriedade;
    }

    function __set($propriedade, $valor){
        $this->$propriedade = $valor;
    }

    function __construct(string $material, string $cor, string $marca, string $acabamento)
    {
        $this->material = $material;
        $this->cor = $cor;
        $this->marca = $marca;
        $this->acabamento = $acabamento;
    }
}
