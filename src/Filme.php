<?php

// src/Filme.php

//Filme é uma SubClasse que herda da superclasse Conteudo
class Filme extends Conteudo
{
    // Propriedade específica de classe Filme
    private int $duracao;
    public function __construct(string $titulo, string $genero, int $ano, int $duracao)
    {
        parent::__construct($titulo, $genero, $ano);
        
        
        $this->duracao = $duracao;
    }

}
