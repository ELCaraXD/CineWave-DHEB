<?php 
extract($_POST);
session_start();

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


    header('Location: ../html/Carrinho.php');
    exit;
?>