<footer class="rodape">
    <nav id="footerMinDiv" class="navbar <?=$typeRodape = $page == "home" ? "fixed-bottom" : "" ;?> navbar-light bg-warning">
        <a class="navbar-brand">
            <img src="img/icon-cego.png"  alt="Ícone de acessibilidade para deficientes visuais" width="30" height="30" class="d-inline-block align-top rounded">
            <img src="img/icon-surdo.png" alt="Ícone de acessibilidade para surdos"              width="30" height="30" class="d-inline-block align-top rounded">
        </a>
    
        <div>
            <p id="footerText" class="navbar-brand">Obrigado pela preferência, nos visite nas redes sociais</p>
            <a class="navbar-brand" href="https://www.facebook.com/pages/category/Burger-Restaurant/Rei-Fastburguer-1843649892601775/">   
                <img src="img/facebook.png" width="30" height="30" class="d-inline-block align-top rounded" alt="link ícone facebook">
            </a>
        </div>
    </nav>
</footer>

<!-- Início VLibras -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
<!-- Fim VLibras -->

</body>
</html>