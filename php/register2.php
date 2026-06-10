<?php
extract($_POST);
if(!isset($_SESSION))SESSION_START();

if(isset($b1)) {
    $nome = "Compras/".$CPF. " " . date("d_m_Y H_i_s") .".dat";
	  
		if (file_exists($nome)) {
				header('Location: ../html/index.php');
				exit;
         } else {

          $arq=fopen($nome,"w");
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