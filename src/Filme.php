<?php

// src/Filme.php

class Filme
{
    private string $titulo;
    private string $genero;
    private int $ano;  // (int) numero inteiro

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    /* Métodos setters: permitem ACESSO/ESCRITA (colocar dados) */
    /* Setters recebem através de parâmetros os dados a serem
colocados nas propriedades. */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setGenero(string $genero): void
    {
        $this->genero = $genero;
    }
    
    public function setAno(string $ano): void
    {
        $this->ano = $ano;
    }
}
