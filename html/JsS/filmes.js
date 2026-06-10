setInterval(conte, 10);

        function conte(){
            
            let conteudo = window.location.hash
            let maior = 4;
            let menor = 1;

            let mostrar = 100;
            let escondido = 0;

            let sino = document.getElementById("sino")
            let elen = document.getElementById("elen")
            let gale = document.getElementById("gale")
            let info = document.getElementById("info")
            let menu = document.getElementById("Menu")
            
            switch(conteudo) {
                case "#sino":
                    sino.style.zIndex = maior;
                    sino.style.opacity = mostrar;
                    elen.style.zIndex = menor;
                    elen.style.opacity = escondido;
                    gale.style.zIndex = menor;
                    gale.style.opacity = escondido;
                    info.style.zIndex = menor;
                    info.style.opacity = escondido;

                    break;

                case "#elen":
                    sino.style.zIndex = menor;
                    sino.style.opacity = escondido;
                    elen.style.zIndex = maior;
                    elen.style.opacity = mostrar;
                    gale.style.zIndex = menor;
                    gale.style.opacity = escondido;
                    info.style.zIndex = menor;
                    info.style.opacity = escondido;
                    break;

                case "#gale":
                    sino.style.zIndex = menor;
                    sino.style.opacity = escondido;
                    elen.style.zIndex = menor;
                    elen.style.opacity = escondido;
                    gale.style.zIndex = maior;
                    gale.style.opacity = mostrar;
                    info.style.zIndex = menor;
                    info.style.opacity = escondido;
                    break;

                case "#info":
                    sino.style.zIndex = menor;
                    sino.style.opacity = escondido;
                    elen.style.zIndex = menor;
                    elen.style.opacity = escondido;
                    gale.style.zIndex = menor;
                    gale.style.opacity = escondido;
                    info.style.zIndex = maior;
                    info.style.opacity = mostrar;
                    break;

                default:
                    sino.style.zIndex = maior;
                    sino.style.opacity = mostrar;
                    elen.style.zIndex = menor;
                    elen.style.opacity = escondido;
                    gale.style.zIndex = menor;
                    gale.style.opacity = escondido;
                    info.style.zIndex = menor;
                    info.style.opacity = escondido;
            }
        }

        document.querySelectorAll("#Menu a").forEach(link => {
            link.onclick = function(){
                document
                .querySelectorAll("#Menu a")
                .forEach(a => a.classList.remove("active"));
                this.classList.add("active");
            }
        });