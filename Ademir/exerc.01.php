<?php
 
class produto
{
  public $nome;
  public $preco;
  public $quantidade;

//Metodos
public function exibeInformacoes($nome,$preco,$quantidade){
    echo "exibeInformacoes...<br>";
}

}
$p1 = new produto();
//como os atributos da classe Caneta são públicos, podemos acessá-los diretamente
$p1->nome = "caneta";
$p1->preco = 2.5;
$p1->quantidade = 20;
$p1-> exibeInformacoes("caneta",2,5,20);

// Exibindo os atributos da caneta
echo "Nome: " . $p1->nome . "<br>";
echo "Preco: " . $p1->preco . "<br>";
echo "Quantidade: " . $p1->quantidade . "<br>";







?>


