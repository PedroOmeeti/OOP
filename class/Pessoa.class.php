<?php
 
 class Pessoa {
  
  // Criando os Atributos para o Humano

  private $nome;
  private $idade;
  private $profissao;
 

// Criando Valores Iniciais

  public function __construct($nome, $idade, $profissao)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->profissao = $profissao;

  }

   // Criando os Métodos para que eles possam ser chamados e utilizados

   public function getNome() { // Ex: Se chamarmos o método nome, vai ser apresentado na tela somente o nome da pessoa.
    echo "Nome: $this->nome<br>";
   }

   public function getIdade() { // Mostra somente a idade.
    echo "Idade: $this->idade<br>";
   }

   public function getProfissao() { // Mostra somente a profissão.
    echo "Profissão: $this->profissao";
   }

   public function Apresentar() { //Mostra todos os dados da pessoa.
    echo "
    Nome: $this->nome<br>
    Idade: $this->idade<br>
    Profissão: $this->profissao<br><br>";
  }

 }
   








?>