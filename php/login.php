<?php

//extract que pega as informaçoes do table do login
extract($_POST);

//vejo se a sessao ta aberta, se nao eu abro
//era pra ta usando isso em todos em vez de so iniciar
//mas ta dando certo ent dps muda
if(!isset($_SESSION))SESSION_START();


//pergunto se o botao de logar foi apertado
//quando eu uso o extract oque tem "name=nome do negocio" vira variavel aqui no php
if(isset($b2)){

	  //senha igual a zero
      $pass = 0;
	    
	 	//aqui ta pegando e colocando o lugar que eu salvei o usuario na variavel $nome
	    $nome = "usuarios/".$login.".dat";
		
		    //vendo se o lugar existe se sim ele pega oque tem dentro do arquivo e coloca no $pass
			if(file_exists($nome)){
			 //abrindo o arquivo e falando que vai ler
           	 $arq = fopen ($nome,"r");
			 //pegando os textos do arquivo e colocando no $pass
	         $pass = fgets ($arq,1000);
			 //fechando o arquivo
	         fclose ($arq);
			}

		//aqui ta vendo se a senha que eu digitei no html e igual a que ta no arquivo
		//ele usa ' md5($senha) == $pass ' pq o md5() criptografa a senha do html e compara com a do arquivo
	    if (md5($senha) == $pass){
				       	//falando que o cara ta logado
						$_SESSION['Logado'] = 'ok';
						//colocando o nome do cara no session
						$_SESSION['Nome'] = $login;
						//mandando pro index
		           header('Location: ../index.php');
               exit;
	    }else{//voltando pro login caso a senha esteja erra ou o resto estiver errado
			  //deveria colocar se a senha ta erra ou se o usuario ta errado e nao so mandar do zero
		           header('Location: ../html/login.html');
               exit;
	    }
}
?>
