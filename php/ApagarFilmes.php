<?php 

//esse extract e inutil agora que fui ver
//pq eu nao pego nada ent ele so e atoa
extract($_POST);

//inicio a sessao pra ver oque o usuario tem
session_start();


//daqui pra baixo eu so apago deixo todos os filmes como vazio 
    $_SESSION['cmh10'] = '';
    $_SESSION['Hate'] = '';
    $_SESSION['Odise'] = '';
    
    $_SESSION['Ace'] = '';
    $_SESSION['Anna'] = '';
    $_SESSION['Diar'] = '';
    
    $_SESSION['Derv'] = '';
    $_SESSION['Drama'] = '';
    $_SESSION['Extra'] = '';
    
    $_SESSION['Gent'] = '';
    $_SESSION['Gent2'] = '';
    $_SESSION['Inter'] = '';
    
    $_SESSION['Missa'] = '';
    $_SESSION['Tele'] = '';
    $_SESSION['Missa2'] = '';
    
    $_SESSION['Rambo'] = '';


    //manda pra pagina do carrinho depois 
    header('Location: ../html/Carrinho.php');
    exit;
?>