<?php
require_once('../class/Pessoa.class.php');
// Criando as classes

$pessoa1 = new Pessoa("Pedro", 19, "Desenvolvedor Web Full Stack");
$pessoa2 = new Pessoa("Gustavo", 19, "Anonymous");
$pessoa3 = new Pessoa("Giovanna", 17, "Pediatra");
$pessoa4 = new Pessoa("Inaldo", 17, "Desenvolvedor Full Stack");
$pessoa5 = new Pessoa("Rauliane", 17, "Dinheiro");

// Criando um array para mostrar as classes.
$array = [$pessoa1, $pessoa2, $pessoa3, $pessoa4, $pessoa5]; 


// Utilizando o foreach para mostrar os itens do array.
foreach($array as $i) {

  $i->Apresentar();

}






?>