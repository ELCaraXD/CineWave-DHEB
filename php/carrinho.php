<?php 
extract($_POST);
session_start();

if(!isset($_SESSION['Quant_F'])){
    $_SESSION['Quant_F'] = 0;
}

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


    header('Location: ../index.php');
    exit;
?>