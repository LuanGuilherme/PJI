<?php

header("Content-type: text/html; charset=utf-8");

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
    }
    //return (removeVirgula($produtos, $tamanho));
    return $produtos;
}

function removeVirgula ($produtos, $tamanho) {
    if ($produtos[$tamanho] == ",") {
        $produtos[$tamanho] = " e";
        return $produtos;
    }
    print_r($produtos[$tamanho]);
    removeVirgula($produtos, $tamanho-1);
}
