<?php

class Pokemon
{
    public $nome;
    public $tipo;
    public $pokedex;
    public $evoluzione;
    public $regione;
    function __construct(string $_nome, string $_tipo, int $_pokedex, int $_evoluzione, string $_regione)
    {
        $this->nome = $_nome;
        $this->tipo = $_tipo;
        $this->pokedex = $_pokedex;
        $this->evoluzione = $_evoluzione;
        $this->regione = $_regione;
    }
}
