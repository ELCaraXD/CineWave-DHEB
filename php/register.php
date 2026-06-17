<?php

//pegando as informaçoes do registrar
extract($_POST);

//vejo se a sessao ta aberta, se nao eu abro
if(!isset($_SESSION))SESSION_START();

//vendo se eu cliquei o botao de registrar
if(isset($b1)) {

    //aqui pega o lugar que quero salvar e como
    $nome = "usuarios/".$login.".dat";
    //pego a senha e criptografo em md5
	  $pass = md5($senha);
	  
    if (file_exists($nome)) {
                //se ja tiver cadastrado vai pra login
                header('Location: ../html/login.html');
         } else {

          //se nao tiver cadastrado
          //falo que vou fazer um arquivo no lugar que falei em cima em $nome
          $arq=fopen($nome,"w");
          //coloco dentro desse arquivo a senha criptografada
	        fwrite($arq,$pass);
          //fecho o arquivo e vou para o login
	        fclose($arq);
          header('Location: ../html/login.html');
          exit;
        }
}

?>
