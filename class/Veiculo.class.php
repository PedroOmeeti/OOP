<?php 

 class Veiculo {

  private $marca;
  private $modelo;
  private $ano;
  private $cor;
  private $preco_zero;

  public function __construct($marca, $modelo, $ano, $cor, $preco_zero)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->cor = $cor;
    $this->preco_zero = $preco_zero;
  }


 public function exibirInformacoes() {
  echo "
  Marca: $this->marca<br>
  Modelo: $this->modelo<br>
  Ano: $this->ano<br>
  Cor: $this->cor<br>
  Preço Zero: R$ $this->preco_zero<br>";
 }

 public function calcularIdade() {
  echo "Idade: " . date('Y') - $this->ano . "<br>";
 }
  
public function calcularDepreciacao() {
  $d = $this->preco_zero- (((date('Y')-$this->ano)* 430) +2100);
  echo "Valor Atual: R$ " . $d . "<br>";
}

public function ehNovo() {
  $idade = date('Y')-$this->ano;
  if($idade <= 2) {
    echo "Carro Novo <br>";
  } else {
    echo "Carro Velho <br>";
  }
}

public function pintarVeiculo($novaCor) {
  $this->cor = $novaCor;
  echo "$this->cor<br>";
}

}








?>