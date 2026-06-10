<?php
extract($_POST);
if(!isset($_SESSION))SESSION_START();

if(isset($b1)) {
    $nome = "usuarios/".$login.".dat";
	  $pass = md5($senha);
	  if (file_exists($nome)) {
                header('Location: ../html/registra.html');
         } else {

          $arq=fopen($nome,"w");
	        fwrite($arq,$pass);
	        fclose($arq);
          header('Location: ../html/login.html');
          exit;
        }
}

?>
