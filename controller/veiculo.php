<?php 
  require_once('../class/Veiculo.class.php');
  $veiculo1 = new Veiculo("Chevrolet", "Prisma", 2017, "Prata", 45798);

  $veiculo1->exibirInformacoes();
  $veiculo1->calcularIdade();
  $veiculo1->calcularDepreciacao();
  $veiculo1->ehNovo();
  $veiculo1->pintarVeiculo("Rosa");





?>