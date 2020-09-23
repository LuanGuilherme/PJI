function esconde(menu) {
    var n = document.getElementById("menu")
    //n.style.display =  (n.style.display != 'none' ? 'none' : '' );
    if (n.style.display != 'none') {
        n.style.display = 'none'
        document.getElementById("esconde_menu").value = "Mostrar menu"
    } else {
        n.style.display = ''
        document.getElementById("esconde_menu").value = "Esconder menu"
    }
}

function expandeLink() { //Vide SCR30
    var url = document.getElementById("linkFacebook").textContent
    if (url !== "Página no Facebook (link)") {
        document.getElementById("linkFacebook").textContent = "Página no Facebook (link)"
        document.getElementById("comprime_link").value = "Expandir Links"
    } else {
        document.getElementById("linkFacebook").textContent = "https://www.facebook.com/Rei-Fastburguer (link)"
        document.getElementById("comprime_link").value = "Comprimir Links"
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
    let verifica = getCookie(document.cookie)
    if (pagina != 'home') {
        var vetor = ['nome', 'sub-mosaico', 'menu', 'rodape', 'ul']
        var mosaico = document.getElementsByClassName('sub-mosaico')
        var body = document.getElementsByTagName('body')
        var btn = document.getElementById('esconde_menu')
        if (verifica) {
            location.reload()
            delCookie()
            document.getElementById("contraste").value = "Ativar alto contraste"
        } else {
            body[0].style.backgroundColor = '#111'
            body[0].style.color = 'white'
            btn.style.backgroundColor = '#111'
            btn.style.color = '#FC0'
            for (let i = 0; i < vetor.length; i++){ 
                var timo = document.getElementsByClassName(vetor[i])
                timo[0].style.backgroundColor = 'black'
                timo[0].style.color = 'white'
            }
            for (let i = 0; i < mosaico.length; i++) {
                mosaico[i].style.backgroundColor = 'black'
                mosaico[i].style.color = 'white'
            }
            var links = document.getElementsByTagName('a')
            for (let i = 0; i < links.length; i++) {
                links[i].style.color = '#FC0'
            }
            document.getElementById("contraste").value = "Desativar alto contraste"
            document.cookie = "Contraste = timo; secure"
        }
    } else {
        if (verifica){
            location.reload()
            delCookie()
            document.getElementById("contraste").value = "Ativar alto contraste"
        }else{
            let nome = document.getElementsByClassName('nome')
            let menu = document.getElementsByClassName('menu')
            let rodape = document.getElementsByClassName('rodape')
            let ul = document.getElementsByClassName('ul')
            let body = document.getElementsByTagName('body')
            let btn = document.getElementById('esconde_menu')
            let links = document.getElementsByTagName('a')
            
            body[0].style.backgroundColor = '#111111'
            body[0].style.color = 'white'
            nome[0].style.backgroundColor = '#000000'
            menu[0].style.backgroundColor = '#0a0a0a'
            rodape[0].style.backgroundColor = '#0c0c0c'
            rodape[0].style.color = 'white'
            ul[0].style.backgroundColor = '#000000'
            ul[0].style.color = 'white'
            btn.style.backgroundColor = '#111'
            btn.style.color = '#FC0'
            for (let i = 0; i < links.length; i++) {
                links[i].style.color = '#FC0'
            }
            
            document.getElementById("contraste").value = "Desativar alto contraste"
            document.cookie = "Contraste = timo; secure"
        }
    }
 
}

function getCookie(name) {
    if (name == "") {
        return false;
    } else {
        return true;
    }

}

function delCookie(){
    document.cookie = "Contraste=;expires=Thu, 01 Jan 1970 00:00:00 GMT"
    console.log("Deu")
}