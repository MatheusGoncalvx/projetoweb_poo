<?php

require_once("automoveis.class.php");

class Execucao{
    
    public $automoveis;

    public function __construct(){

        
        $automoveis = new Carro();

        $automoveis->setTipo("<strong>" . "Tipo:" . "</strong>" . " Porshe" . "<br>");
        echo $automoveis->getTipo();
        
        $automoveis->setCor("<strong>" . "Cor:" .  "</strong>" . " Cinza" . "<br>");
        echo $automoveis->getCor();

        $automoveis->setPlaca("<strong>" . "Placa:" . "</strong>" . " MHZ-4345" . "<br>");
        echo $automoveis->getPlaca();

        $automoveis->setNumerodeportas("<strong>" . "Número de portas:" . "</strong>" . " 2" . "<br>");
        echo $automoveis->getNumerodeportas();



    }
}new Execucao();
    $automoveis = new Carro();

    $automoveis->setTipo("<br>" . "<strong>" . "Tipo:" . "</strong>" . " Ferrari" . "<br>");
    echo $automoveis->getTipo();

    $automoveis->setCor("<strong>" . "Cor:" .  "</strong>" . " Vermelho" . "<br>");
        echo $automoveis->getCor();

    $automoveis->setPlaca("<strong>" . "Placa:" . "</strong>" . " JKL-0001" . "<br>");
        echo $automoveis->getPlaca();
    
    $automoveis->setNumerodeportas("<strong>" . "Número de portas:" . "</strong>" . " 4" . "<br>");
    echo $automoveis->getNumerodeportas();

?>