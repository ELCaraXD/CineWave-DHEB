<?php

//pego as informações da pessoa que ta comprando
extract($_POST);

//vejo se ta aberto, se nao abro a sessao
if(!isset($_SESSION))SESSION_START();

//vejo se a pessoa clico em comprar
if(isset($b1)) {
	//crio o lugar onde quero salvar a nota da compra
	//esse date(aidadao) serve pra pegar a data e hora
    $nome = "Compras/".$CPF. " " . date("d_m_Y H_i_s") .".dat";
	  
		//vejo se ja existe essa compra
		//pra ser honesto acho que isso e inutil mas nao sei fazer sem
		//entao se ta funcionado e melhor deixar aqui
		if (file_exists($nome)) {
				header('Location: ../html/index.php');
				exit;
         } else {

		 //pego as informações que o usuario colocou e crio a nota da compra com as infos
          $arq=fopen($nome,"w");//abro o arquivo e escrevo nele
	        fwrite($arq,$Nome);
	        fwrite($arq,$End);
	        fwrite($arq,$Bair);
	        fwrite($arq,$Cid);
	        fwrite($arq,$Est);
	        fwrite($arq,$CEP);
	        fclose($arq);

           header('Location: ../index.php');
          exit;
        }

 		}

?>