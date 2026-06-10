<?php
extract($_POST);
if(!isset($_SESSION))SESSION_START();


if(isset($b2)){
      $pass = 0;
	    $nome = "usuarios/".$login.".dat";
			if(file_exists($nome)){
           $arq = fopen ($nome,"r");
	         $pass = fgets ($arq,1000);
	         fclose ($arq);
			}
	    if (md5($senha) == $pass){
				       $_SESSION['Logado'] = 'ok';
							 $_SESSION['Nome'] = $login;
		           header('Location: ../index.php');
               exit;
	    }else{
		           header('Location: ../html/login.html');
               exit;
	    }
}
?>
