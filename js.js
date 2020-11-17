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

function contraste (pagina) {
    if (isset(document.cookie)) {
        location.reload()
        delCookie()
        document.getElementById("contraste").value = "Ativar Contraste"
    } else {

        if (pagina != 'home') {

            let vetor = ['nome', 'sub-mosaico', 'menu', 'rodape', 'ul']
            let mosaico = document.getElementsByClassName('sub-mosaico')
            let body = document.getElementsByTagName('body')
            let btn = document.getElementById('esconde_menu')

            body[0].style.backgroundColor = '#111'
            body[0].style.color = 'white'
            btn.style.backgroundColor = '#111'
            btn.style.color = '#FC0'

            for (let i = 0; i < vetor.length; i++){ 
                let temp = document.getElementsByClassName(vetor[i])
                temp[0].style.backgroundColor = 'black'
                temp[0].style.color = 'white'
            }

            for (let i = 0; i < mosaico.length; i++) {
                console.log(mosaico[i])
                mosaico[i].style.backgroundColor = 'black'
                mosaico[i].style.color = 'white'
            }

            let links = document.getElementsByTagName('a')
            for (let i = 0; i < links.length; i++) {
                links[i].style.color = '#FC0'
            }

            document.getElementById("contraste").value = "Desativar Contraste"
            document.cookie = "Contraste"

        } else {
            let menu    = document.getElementsByClassName('menu')
            let rodape  = document.getElementsByClassName('rodape')
            let body    = document.getElementsByTagName('body')
            let links   = document.getElementsByTagName('a')
            
            body[0].style.backgroundColor      = '#111111'
            body[0].style.color                = 'white'
            menu[0].style.backgroundColor      = '#0a0a0a'
            rodape[0].style.backgroundColor    = '#0c0c0c'
            rodape[0].style.color              = 'white'
            // links[i].style.color = '#FC0'

            for (let i = 0; i < links.length; i++) {
                links[i].style.color = '#FC0'
            }
            
            document.getElementById("contraste").textContent = "Desativar Contraste"
            document.cookie = "Contraste"
        }
    } 
}

//Se o cookie estiver setado, retorna true; se não, false
function isset(name) {
    if (name == "") {
        return false
    } else {
        return true
    }

}

function delCookie(){
    document.cookie = "Contraste;expires=Thu, 01 Jan 1970 00:00:00 GMT"
    console.log("Deu")
}