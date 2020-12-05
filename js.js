function esconde() {
    var n = document.querySelectorAll('.menus');

    n.forEach(trocaDisplay)
    function trocaDisplay(n) {
        if (n.style.display != 'none') {
            n.style.display = 'none';
            document.getElementById("esconde_menu").value = "Mostrar menu";
        } else {
            n.style.display = 'block';
            document.getElementById("esconde_menu").value = "Esconder menu";
        }
    }
    
}

function expandeLink() { //Vide SCR30
    var url = document.getElementById("linkFacebook").textContent
    if (url !== "Página no Facebook (link)") {
        document.getElementById("linkFacebook").textContent = "Página no Facebook (link)";
        document.getElementById("comprime_link").textContent = "Expandir Links";
    } else {
        document.getElementById("linkFacebook").textContent = "https://www.facebook.com/Rei-Fastburguer (link)";
        document.getElementById("comprime_link").textContent = "Comprimir Links";
    }
}

function focoLink() {
    document.getElementById("linkFacebook").style.color = "#e84914"
}

function semFoco() {
    document.getElementById("linkFacebook").style.color = "blue"
}

function converteReal(valor) {
    var din = parseInt(valor);
    din = din.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
    document.write(din);
}