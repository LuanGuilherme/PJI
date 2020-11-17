<?php

header("Content-type: text/html; charset=utfe-8");

function cnx () {
    $cnx = mysqli_connect("localhost", "root", "", "fastburguer");
    mysqli_set_charset($cnx, 'utf8');
    return $cnx;
}

function selecionarAdicional (){
    $comando = "SELECT * FROM selectAdicionais";
    $retorno = mysqli_query(cnx(), $comando);
    $produtos = array();
    while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
    }
    return ($produtos);
}

function selecionarBatata (){
    $comando = "SELECT * FROM Batata";
    $retorno = mysqli_query(cnx(), $comando);
    $produtos = array();
    while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
    }
    return ($produtos);
}

function selecionarCrepe (){
    $comando = "SELECT * FROM Crepe";
    $retorno = mysqli_query(cnx(), $comando);
    $produtos = array();
    while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
    }
    return ($produtos);
}

function selecionarSobremesa (){
    $comando = "SELECT * FROM Sobremesa";
    $retorno = mysqli_query(cnx(), $comando);
    $produtos = array();
    while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
    }
    return ($produtos);
}

function selecionarBebidas (){
    $comando = "SELECT * FROM Bebidas";
    $retorno = mysqli_query(cnx(), $comando);
    $produtos = array();
    while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
    }
    return ($produtos);
}

function selecionarLanche (){
    $produtos = array();
    for ($i = 1; $i < 29; $i++) {
        $retorno = mysqli_query(cnx(), "CALL selectLanches($i)");
        $produtos[] = mysqli_fetch_assoc($retorno);
        $produtos[$i-1]["DescricaoLanche"] = 
            removeVirgula($produtos[$i-1]["DescricaoLanche"],
            strlen($produtos[$i-1]["DescricaoLanche"])-1);     //Quebra de linha em virtude de legibilidade
    }
    return $produtos;
}

//Percorre recursivamente de trás para frente a string de ingredientes dos lanches.
//Tendo encontrado a última vírgula, separa a string em antes e depois dela.
//Ao final, concatena o começo e o final anteriormente separados com a adição de "e" ao meio.
function removeVirgula ($produtos, $tamanho) {
    if ($produtos[$tamanho] == ",") {
        $comeco = substr($produtos, 0, $tamanho);
        $final = substr($produtos, $tamanho+1);
        $produtos = $comeco." e ".$final;
        return $produtos;
    }
    return removeVirgula($produtos, $tamanho-1);
}

?>