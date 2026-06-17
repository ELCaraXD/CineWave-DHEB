<?php 

//esse extract nao e inutil
extract($_POST);

//iniciando a sessão de novo
//a sessão tem que ser iniciada para consegui ver oque o usuario tem e se ele esta logado
session_start();


//aqui eu fiz esse if pra ver a quant de filmes que a pessoa tem
//tava pensando em no carrinho colocar quantos filmes ela ja comprou e tem no carrinho
//mas nao sei se fica bonito
if(!isset($_SESSION['Quant_F'])){
    $_SESSION['Quant_F'] = 0;
}

//todos esses ifs sao uma burrice extrema
//mas eles estao dando certo

//quando eu to na pagina do filme e clico em adicionar ao carrinho
//eu pergunto pra esse php qual foi o filme que eu adicionei ao carrinho
//porem daria pra em vez de deixar o nome do filme no botao, seria melhor
//informar o nome do filme como um numero e passar todos os filmes por um for
//exemplo
//for i in range(numero_filmes)
//  if(isset( $filme[i] )){
//      wnadiwndaiapwxm
//      aowidpawiwadawi
//  }
//fim Exemplo
//isso ficaria bem melhor e menor o codigo
//mas e melhor mudar depois

if(isset($cmh10)) {
    $_SESSION['cmh10'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Hate)) {
    $_SESSION['Hate'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Odise)) {
    $_SESSION['Odise'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}

if(isset($Ace)) {
    $_SESSION['Ace'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Anna)) {
    $_SESSION['Anna'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Diar)) {
    $_SESSION['Diar'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}

if(isset($Derv)) {
    $_SESSION['Derv'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Drama)) {
    $_SESSION['Drama'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Extra)) {
    $_SESSION['Extra'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}

if(isset($Gent)) {
    $_SESSION['Gent'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Gent2)) {
    $_SESSION['Gent2'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Inter)) {
    $_SESSION['Inter'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}

if(isset($Missa)) {
    $_SESSION['Missa'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Tele)) {
    $_SESSION['Tele'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Missa2)) {
    $_SESSION['Missa2'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}
if(isset($Rambo)) {
    $_SESSION['Rambo'] = 'ok';
    $_SESSION['Quant_F'] = $_SESSION['Quant_F'] + 1;
}


    //volto pro index 
    header('Location: ../index.php');
    exit;
?>