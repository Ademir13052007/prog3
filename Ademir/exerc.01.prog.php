<?php
 
class produto
{
  public $nome;
  public $preco;
  public $quantidade;


public function exibeInformacoes($nome,$preco,$quantidade){
    echo "$this->nome=$nome,$this->preco=$preco, $this->quantidade=$quantidade";
}

}
$p1->nome="Caneta";
$p1->preco=2.10;
$p1->quantidade=10;
$p1-> exibeInfo();
?>


