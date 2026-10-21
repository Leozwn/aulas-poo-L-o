<?php
// src/Conteudo.php

// Conteudo é uma superclasse que compartilha recursos com oureas classes (subclasses).
class Conteudo
{
    protected string $titulo;
    private string $genero;
    private int $ano;  // (int) numero inteiro

    public function __construct(string $titulo, string $genero, int $ano)
    {

    $this->titulo = $titulo;
    $this->genero = $genero;

    $this->setAno($ano);
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

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

    public function ehClassico () : bool
    {
        return $this->ano < 2000;
    }
}