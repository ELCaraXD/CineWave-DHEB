<?php  
session_start();
?>

<html>
    <head>
        <title>CineWave DHEB</title>
        <style>
            @font-face {
                font-family: 'Decohead'; 
                src: url('html/fonts/DecoheadFREE.otf') format('opentype'); 
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'Aliens'; 
                src: url('html/fonts/AliensAmongUs.otf') format('opentype');  
                font-weight: normal;
                font-style: normal;
            }
            body{
                height: 1536px;

                background-image: url('html/imgGe/backHome.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                
                display: flex;
                align-items: center;
                flex-direction: column;
                flex-wrap: wrap;
                
                color: white;
                margin: 0;
            }

            #nav{
                display: flex;
                align-items: center;
                justify-content: center;

                font-family: 'Decohead';
                font-size: 30px;

                background-size: 13%;
                background-repeat: no-repeat;
                background-position: left;
                background-position-x: 10px;

                position: fixed;
                top: 0;
                left: 36%;
                z-index: 10;

                height: 5%;
                width: 20%;
                
                border: 9px;
                border-style: hidden double double double;
                border-radius: 0px 0px 10px 10px;

                background-color: transparent;
                backdrop-filter: blur(25px);
                
                color: black;
                transition: width 1s, height 1s;
            }
            #nav:hover{
                height: 8%;
                width: 23%;
            }
            #Sair{
                display: flex;
                align-items: center;
                justify-content: center;

                font-family: 'Decohead';
                font-size: 30px;

                background-size: 13%;
                background-repeat: no-repeat;
                background-position: left;
                background-position-x: 10px;

                position: fixed;
                top: 0;
                right: 40%;
                z-index: 10;

                height: 5%;
                width: 4%;
                
                border: 9px;
                border-style: hidden double double double;
                border-radius: 0px 0px 10px 10px;

                background-color: transparent;
                backdrop-filter: blur(25px);
                
                color: black;
                transition: width 1s, height 1s;
            }
            #Sair:hover{
                height: 8%;
                width: 6%;
            }

            .Categs{
                font-size: xx-large;
                font-family: "Aliens";

                
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center;

                position: relative;
                top: 50%;
                display: flex;

                border-radius: 20px 20px 20px 20px ;

                display: flex;
                justify-content: space-evenly;
                flex-wrap: wrap;

                margin-top: 2%;

                width: 80%;
                height: 3%;
                
                background-color: black;
                color: white;

                overflow:hidden;

                transition: height 1.5s;
            }
            .Categs:hover{
                height: 22%;
            }
            
            .Mold{
                cursor:pointer;

                position: absolute;
                top: 30px;
                left: 10%;

                border-radius: 20px;

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
        <div id="navibar">
            <a href="html/Carrinho.php" id="nav"></a>
            <a href="php/sair.php" id="Sair"> <img src='html/imgGe/Sair.svg' style='width:20px;'> </a>
        </div>
            <div class="Categs" style="background-image: url('html/imgGe/drama.png');">
                Drama
                <a href="html/filmes/drama.html" class="Mold" style="background-image: url(html/Capas/Dram.png); left: 20%; "></a>        

                <a href="html/filmes/extra.html" class="Mold" style="background-image: url(html/Capas/Extr.png); left: 60%;"></a>        
            </div>

            <div class="Categs" style="background-image: url('html/imgGe/comedia.png');">
                Comedia
                <a href="html/filmes/Gent.html" class="Mold" style="background-image: url(html/Capas/Gent1.png);  "></a>        
                <a href="html/filmes/Ace.html" class="Mold" style="background-image: url(html/Capas/Ace.png); left: 40%; top: 40px;"></a>        
                <a href="html/filmes/Gent2.html" class="Mold" style="background-image: url(html/Capas/Gent2.png); left: 70%;  "></a>
            
            </div>

            <div class="Categs" style="background-image: url('html/imgGe/acao.png');">
                Acao
                <a href="html/filmes/Missa1.html" class="Mold" style="background-image: url(html/Capas/Miss1.png);  "></a>        
                <a href="html/filmes/Rambo.html" class="Mold" style="background-image: url(html/Capas/Rambo.png); left: 40%; top: 40px;"></a>        
                <a href="html/filmes/Missa2.html" class="Mold" style="background-image: url(html/Capas/Miss2.png); left: 70%;  "></a>
            </div>

            <div class="Categs" style="background-image: url('html/imgGe/terror.png');">
                Terror
                <a href="html/filmes/anna.html" class="Mold" style="background-image: url(html/Capas/Anna.png); left: 20%; "></a>        
                    
                <a href="html/filmes/tele.html" class="Mold" style="background-image: url(html/Capas/TePr.png); left: 60%;"></a>    
            </div>

            <div class="Categs" style="background-image: url('html/imgGe/fic.png');">
                Ficcao Cientifica  
                <a href="html/filmes/inter.html" class="Mold" style="background-image: url(html/Capas/Inter.png);  "></a>        
                <a href="html/filmes/2001.html" class="Mold" style="background-image: url(html/Capas/2001.png); left: 40%; top: 40px;"></a>        
                <a href="html/filmes/derv.html" class="Mold" style="background-image: url(html/Capas/Devor.png); left: 70%;  "></a>
            </div>

            <div class="Categs" onclick="atv(this)" style="background-image: url('html/imgGe/roman.png');">
                Romance        
                <a href="html/filmes/diar.html" class="Mold" style="background-image: url(html/Capas/Diar.png); left: 40%; top: 40px;"></a>        
                <a href="html/filmes/cmh10.html" class="Mold" style="background-image: url(html/Capas/Ch10.png); left: 70%;  "></a>
            </div>

            
            

        <script>

        document.addEventListener("DOMContentLoaded", function () {
            let logado = "<?php echo $_SESSION['Logado'] ?? ''; ?>";;
            let nome = "<?php echo $_SESSION['Nome'] ?? ''; ?>";
            let nav = document.getElementById("nav")
            let sair = document.getElementById("Sair")
            
            
            
            nav.innerHTML =  "<img src='html/imgGe/Homen.svg' style='width:20px; margin-right:10px;'>" + " - Log/Res - " + "<img src='html/imgGe/Mulher.svg' style='width:20px; margin-left:10px;'>";
            nav.style.backgroundImage = "none";

            if (logado == 'ok'){
                nav.innerHTML = nome + " - Carrinho";
                nav.style.backgroundImage = "url('html/imgGe/Carrinho.svg')";
                
                nav.style.left = "30%";

                sair.style.display = "flex"
            }else{
                sair.style.display = "none"
            }
        });

        </script>
    </body>
</html>