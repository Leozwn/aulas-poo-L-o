<?php 
// Importando A SUPERCLASSE/PAI
require_once "src/Conteudo.php";
// IMPORTANDO A SUBCLASSE/FILHA
require_once "src/Filme.php";
require_once "src/Serie.php";

//-------------------------------------------------------

//Criando um OBJETO ou uma INSTÂNCIA a partir da classe Filme
$filme1 = new Filme('Batman: O Cavaleiro das Trevas','Ação', 2008, 166);

/* $filme1->setTitulo("Batman: O Cavaleiro das Trevas");
$filme1->setAno(2008) ;
$filme1->setGenero("Ação"); */

$filme2 = new Filme('O grande Truque', 'mistério', 2006, 105);

/* $filme2->setTitulo("O grande Truque");
$filme2->setAno(2006);
$filme2->setGenero("mistério"); */

$filme3 = new Filme('A procura da felicidade', 
'Melodrama', 2006, 145);

/* $filme3->setTitulo("A procura da felicidade");
$filme3->setAno(2006);
$filme3->setGenero("Melodrama"); */

// ---------------------------------------------------

$serie1 = new Serie('Breaking Bad', 'Drama', 2008, 5);
$serie2 = new Serie('Stranger Things', 'Ficção científica', 2016, 4);

/* echo "<pre>";
var_dump($filme1, $filme2, $filme3);
echo "</pre>"; */

$filmes = [$filme1, $filme2, $filme3];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes</h1>
            <p>Três filmes para descobrir, rever e se divertir</p>
        </header>

        <div class="filmes">

        <?php foreach($filmes as $filme): ?>
            <article class="card-filme">
            <span class="genero"> <?= $filme->getGenero() ?></span>
            <h2> <?= $filme->getTitulo() ?></h2>
            <p class="ano">Lançamento: <?= $filme->getAno() ?></p>
            
            <?php if( $filme->ehClassico()): ?>
                <span class="classico">clássico</span>
            <?php endif; ?>
            </article>
        <?php endforeach; ?>
        </div>

        <section>
            <h2>Séries</h2>
            <pre><?php var_dump($serie1, $serie2); ?></pre>
        </section>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                
            </ul>
        </div>

    </div>
</body>

</html>