<?php

// src/Filme.php

class Filme 
{
    private string $titulo;
    private string $genero;
    private int $ano;  // (int) numero inteiro

    // Método CONSTRUTOR: a finalidade deste método é receber dados no momento da criação do objeto e atribuí-los ás propriedades. Este método NÃO POSSUI retorno.
    public function __construct(string $titulo, string $genero, int $ano)
    {

    // Atribuindo os valores recebidos pelos parâmetros ás propriedades
    $this->titulo = $titulo;
    $this->genero = $genero;
    // $this->ano = $ano;

    // Dica: podemos (ou, dependendo do caso, devemos) usar os setters atraves do construtor
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

    public function getTitulo(): int
    {
        return $this->titulo;
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

    public function ehClassico () : bool
    {
        return $this->ano < 2000;
    }
}
