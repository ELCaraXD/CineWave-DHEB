<?php 

    //inicio a sessao
    session_start();
    
    //pergunta se o cara ta logado ou nao
    //faz isso pq pode ser que ele venha pra ca sem ta logado
    //e se isso acontecer ele vai pra aba de login
    //isso e uma gambiarra que deu certo
    if($_SESSION['Logado'] != 'ok'){
        header('Location: login.html');
        exit;
    }else{
        echo "";
    }
?>
<html>
    <head>
        <title>Usuario</title>
        <style>
            @font-face {
                font-family: 'Decohead'; 
                src: url('fonts/DecoheadFREE.otf') format('opentype'); 
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'Aliens'; 
                src: url('fonts/AliensAmongUs.otf') format('opentype');  
                font-weight: normal;
                font-style: normal;
            }
            body{
                height: 1535px;

                background-image: url('imgGe/usuBack.svg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: top;
                
                display: flex;
                align-items: center;
                flex-direction: column;
                flex-wrap: wrap;
                
                color: white;
                margin: 0;   
            }
            #voltar{
                position: absolute;
                left: 1%;
                top: 1%;
             
                font-family: 'Decohead';
                font-size: xx-large;
                text-align: center;

                background-image: url('../imgGe/Voltar.svg');
                background-size: 15%;
                background-repeat: no-repeat;
                background-position: left;

                width: 120px;  
                height: 35px;
                border-radius: 0px 0px 10px 0px;

                color: white;
                background-color: transparent; 

                transition: width 1s,height 1s,font-size 1s;
                cursor: pointer;    
            }
                #voltar:hover{
                width: 140px;
                height: 55px;
                font-size: 50px;
            } 

            #Comp{
                font-family: 'Aliens';
                font-size: 14px;

                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                flex-wrap: wrap;

                position: absolute;
                top: 34%;       
                left: 47%;
            
                width: 13%;
                height: 10%;

                border: 2px;
                border-style: double;
                border-radius: 30px;

                background-color: transparent;
                backdrop-filter: blur(15px);

                color: black;
                box-shadow: 3px 3px 10px black;
                transition: height 1s;
            }
            #Comp:hover{
                height: 16%;
            }

            #Apag{
                font-family: 'Aliens';
                font-size: 14px;

                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                flex-wrap: wrap;

                position: absolute;
                top: 34%;
                left: 33%;
            
                width: 13%;
                height: 10%;

                border: 2px;
                border-style: double;
                border-radius: 30px;

                background-color: transparent;
                backdrop-filter: blur(15px);

                cursor: pointer;

                color: black;
                box-shadow: 3px 3px 10px black;
                transition: height 1s;
            }
            #Apag:hover{
                height: 16%;
            }

            #moldUsu{
                font-family: 'Aliens';
                font-size: 40px;

                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                flex-wrap: wrap;

                margin-top: 3%;
            
                width: 20%;
                height: 10%;

                border: 10px;
                border-style: double;
                border-radius: 30px;

                background-color: transparent;
                backdrop-filter: blur(15px);

                color: white;
                box-shadow: 3px 3px 10px black;
            }
            .moldCat{
                font-family: 'Decohead';
                font-size: 40px;
                position: relative;
                left: -30%;

                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                flex-wrap: wrap;
                
                margin-top: 10px;

                width: 20%;
                height: 10%;

                border: 10px;
                border-style: double;
                border-radius: 30px;

                background-color: transparent;
                backdrop-filter: blur(15px);

                color: white;
                box-shadow: 3px 3px 10px black;
                transition: height 1s, width 1s;
            }
            .moldFilmes{
                font-family: 'Decohead';
                font-size: 40px;
                
                position: absolute;
                left: 9%;
                top: 55%;
    
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                
                margin-top: 5px;

                width: 20%;
                height: 170%;

                border: 10px;
                border-style: double;
                border-radius: 30px;

                background-color: transparent;
                backdrop-filter: blur(15px);

                color: white;
                box-shadow: 3px 3px 10px black;
                transition: height 1s, width 1.5s;
                overflow:hidden;
            }
            .moldFilmes:hover{
                width: 80%;
            }
            .Cres{
                height: 40%;
                width: 40%;
            }
            .Mold{
                cursor:pointer;

                width: 216px;
                height: 270px;

                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-color: transparent;

            }

        </style>
    </head>

    <body>
        <!-- botao pra voltar pro index -->
        <a href="../index.php" id="voltar">
            Voltar
        </a>

        
        <!-- aqui deixa vazio pq vai usar o javascript pra colocar o nome de quem ta logado dentro -->
        <div id="moldUsu"></div>
        
        <!-- cria um botao que chama o php de apagar todos os filmes -->
        <form method = 'Post' action = '../php/ApagarFilmes.php'>
            <button type="submit" id="Apag" value = 'Salvar' name = 'apag'>Apagar Carrinho</button>
        </form>

        <!-- botao pra ir pra pagina de comprar carrinho que no final so apaga tbm -->
        <a id="Comp" href="compra_car.html">Comprar carrinho</a>

        <div class="moldCat" style=" left:-30%; top:-3%">Carrinho</div>
        <div class="moldFilmes" id="Carri">
        
        </div>
        <script>
  
        //mesma função que toda vez que a pagina abrir eu inicio
        document.addEventListener("DOMContentLoaded", function () { 

            //ver se ta logado e salvar na variavel
            //oque vendo agora parece burrice pq ja vejo isso em cima
            //mas ta funcionando
            let logado = "<?php echo $_SESSION['Logado'] ?? ''; ?>";
            //pegando o nome do cara pelo sesseion do php e colocando na variavel
            let nome = "<?php echo $_SESSION['Nome'] ?? ''; ?>";

            //pegando a div pra colocar o nome do cara
            let usu = document.getElementById("moldUsu");
            //pegando a div do carrinho pra colocar os filmes dentro
            let carri = document.getElementById("Carri");
            
            //aqui pra baixo e a mesma burrice do php
            //daria pra usar um for pra ver td
            //so que teria que mudar e ir testando
            //mas resumindo issso pega cada session de filme
            //e coloca dentro da variavel
            //serve pra depois eu ver se tenho ou nao o filme
            let Cmh10 = "<?php echo $_SESSION['cmh10'] ?? ''; ?>";
            let Hate = "<?php echo $_SESSION['Hate'] ?? ''; ?>";
            let Odise = "<?php echo $_SESSION['Odise'] ?? ''; ?>";

            let Ace = "<?php echo $_SESSION['Ace'] ?? ''; ?>";
            let Anna = "<?php echo $_SESSION['Anna'] ?? ''; ?>";
            let Derv = "<?php echo $_SESSION['Derv'] ?? ''; ?>";
            
            let Diar = "<?php echo $_SESSION['Diar'] ?? ''; ?>";
            let Drama = "<?php echo $_SESSION['Drama'] ?? ''; ?>";
            let Extra = "<?php echo $_SESSION['Extra'] ?? ''; ?>";
            
            let Gent = "<?php echo $_SESSION['Gent'] ?? ''; ?>";
            let Gent2 = "<?php echo $_SESSION['Gent2'] ?? ''; ?>";
            let Inter = "<?php echo $_SESSION['Inter'] ?? ''; ?>";
            let Truman = "<?php echo $_SESSION['Truman'] ?? ''; ?>";
            
            let Missa = "<?php echo $_SESSION['Missa'] ?? ''; ?>";
            let Missa2 = "<?php echo $_SESSION['Missa2'] ?? ''; ?>";
            let Rambo = "<?php echo $_SESSION['Rambo'] ?? ''; ?>";
            let Tele = "<?php echo $_SESSION['Tele'] ?? ''; ?>";
        
            //coloca o nome do cara na div do nome
            usu.innerHTML = nome;

            //burrice dos if
            //se tiver o filme entao coloco ele no carrinho
            //porem e uma burrice que funciona ent  ok
            if (Cmh10 == 'ok'){
                carri.innerHTML += '<a href="filmes/cmh10.html" class="Mold" style="background-image: url(Capas/Ch10.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Hate == 'ok'){
                carri.innerHTML += '<a href="filmes/10Hate.html" class="Mold" style="background-image: url(Capas/10Hate.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Odise == 'ok'){
                carri.innerHTML += '<a href="filmes/2001.html" class="Mold" style="background-image: url(Capas/2001.png);border-radius: 20px; ;left: 20%; "></a>';
            };

            if (Ace == 'ok'){
                carri.innerHTML += '<a href="filmes/Ace.html" class="Mold" style="background-image: url(Capas/Ace.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Truman == 'ok'){
                carri.innerHTML += '<a href="filmes/Truman.html" class="Mold" style="background-image: url(Capas/Anna.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Anna == 'ok'){
                carri.innerHTML += '<a href="filmes/anna.html" class="Mold" style="background-image: url(Capas/Anna.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Derv == 'ok'){
                carri.innerHTML += '<a href="filmes/derv.html" class="Mold" style="background-image: url(Capas/Devor.png);border-radius: 20px; ;left: 20%; "></a>';
            };

            if (Diar == 'ok'){
                carri.innerHTML += '<a href="filmes/diar.html" class="Mold" style="background-image: url(Capas/Diar.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Drama == 'ok'){
                carri.innerHTML += '<a href="filmes/drama.html" class="Mold" style="background-image: url(Capas/Dram.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Extra == 'ok'){
                carri.innerHTML += '<a href="filmes/extra.html" class="Mold" style="background-image: url(Capas/Extr.png);border-radius: 20px; ;left: 20%; "></a>';
            };

            if (Gent == 'ok'){
                carri.innerHTML += '<a href="filmes/Gent.html" class="Mold" style="background-image: url(Capas/Gent1.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Gent2 == 'ok'){
                carri.innerHTML += '<a href="filmes/Gent2.html" class="Mold" style="background-image: url(Capas/Gent2.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Inter == 'ok'){
                carri.innerHTML += '<a href="filmes/inter.html" class="Mold" style="background-image: url(Capas/Inter.png);border-radius: 20px; ;left: 20%; "></a>';
            };

            if (Missa == 'ok'){
                carri.innerHTML += '<a href="filmes/Missa1.html" class="Mold" style="background-image: url(Capas/Miss1.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Missa2 == 'ok'){
                carri.innerHTML += '<a href="filmes/Missa2.html" class="Mold" style="background-image: url(Capas/Miss2.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Rambo == 'ok'){
                carri.innerHTML += '<a href="filmes/Rambo.html" class="Mold" style="background-image: url(Capas/Rambo.png);border-radius: 20px; ;left: 20%; "></a>';
            };
            if (Tele == 'ok'){
                carri.innerHTML += '<a href="filmes/tele.html" class="Mold" style="background-image: url(Capas/TePr.png);border-radius: 20px; ;left: 20%; "></a>';
            };


        });
        </script>
    </body>
</html>