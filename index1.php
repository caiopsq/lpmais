<!DOCTYPE html>
<html lang="pt">
<head>




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css"> -->
<link rel="stylesheet" href="style.css">
    <title>LP+</title>
    
</head>
<body style="display: flex; flex-direction: column; z-index:3">
<div id="banner-lancamento">
<h3>ESTÁ CHEGANDO A LP+</h3>
<p>Vamos revolucionar o ambiente de ferramentas digitais</p>
<p>Garanta sua vaga nessa nova jornada</p>
</div>    
<div id="header">
        <div class="logo">
            <img src=".\img\logotipo_lp.png" alt="">
        </div>

        <div class="buttons">
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B5561983191996&text=Gostaria+de+saber+como+criar+minhas+landing+pages+sem+complica%C3%A7%C3%A3o%21&type=phone_number&app_absent=0 ">
            <button type="button" id="contato-comercial"><img id="whats" src=".\img\icons8-whatsapp.svg" alt=""> FALAR COM COMERCIAL</button>
            </a>
            <button type="'button" id="planos">PLANOS</button>
            <button class="login-botao"  type="button" id="acesso-login">ENTRAR</button>
        </div>
    </div>
    <div id="destaque">
            <div class="img-destaque">
                <img src=".\img\notebook-lp.png" alt="">
            </div>
            <div class="descricao-destaque">
                <h1><strong>Pronto!</strong></h1>
                <p>Existimos para <strong>tornar o dia a dia do empresário digital mais fácil.</strong></p>
                <button class="criar-conta">CRIAR CONTA</button>
                <h2>Crie Landing Pages</h2>
                <p>em apenas 2 minutos.</p>
            </div>
            
    </div>
    <div id="secao-central">
        <div class="img-secao-central">
            <img src="./img/img-destaque.png" alt="">
        </div>
        <div class="descricao-secao-central">
            <h1 class="titulo-secao-central">Ferramentas de <span class="red-text">marketing,</span> CRM e vendas.</h1>
            <p class="texto-secao-central">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam 
erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat 
nulla facilisis at vero eros et accumsan et iusto odio dignissim qui 
blandit praesent luptatum zzril delenit augue duis dolore te feugait 
nulla facilisi.</p>

<img class="img-graficos" src="./img/secao-graficos.png" alt="">
        </div>
    </div>

    <div class="secao-video">
        <div>
            <h1>Assista e veja como é simples!</h1>
        </div>
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/91Q6RvKvd7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <button type="button" id="contato-comercial"><img id="whats" src=".\img\icons8-whatsapp.svg" alt=""> FALAR COM COMERCIAL</button>
        </div>
        
    </div>

    <div id="parceiros">
        <div id="titulo-parceiros">
        <h2>Parceiros</h2>
        </div>

        <div id="carrousel-parceiros">
            <img src="./img/GSuite.png" alt="">
            <img src="./img/whatsapp.png" alt="">
            <img src="./img/GSuite.png" alt="">
        </div>

    </div>

    <div class="newsletter">
        <h3 class="newsletter-titulo">Fique por dentro das nossas novidades!</h3>
        <p class="texto-news">Se inscreva em nossa newsletter.</p>

    <form class="form-news" action="">
        <input type="email" name="newsletter-input" id="newsletter">
        <button type="button">Inscrever</button>
    </form>

    </div>

    <div id="rodape">
        <img src="./img/logo_lp_branco_rosa.png" alt="">
<p>Termos de Uso I Política de Privacidade</p>
<p>Brasilia, Distrito Federal I comercial@lpmais.com I CNPJ 000777000/0001-00</p>

    </div>
    <?php
    include './banner_login.php';
?>
</body>


<script defer>

    const button = document.getElementById("acesso-login");

button.addEventListener("click", function(){
    const corpoModal = document.getElementById("login-modal");
    const modal = document.getElementById("corpo-login");
    const overlay = document.getElementById("overlay");

    corpoModal.style.display = "flex";
    corpoModal.style.zIndex = "2";
    modal.style.display = "flex";
    modal.style.zIndex = "2";
    overlay.style.display = "block";
    overlay.style.zIndex = "1";

}) 



const fechaBanner = document.getElementById("fechar-banner");

fechaBanner.addEventListener("click", function(){
    const corpoModal = document.getElementById("login-modal");
    const modal = document.getElementById("corpo-login");
    const overlay = document.getElementById("overlay");

    corpoModal.style.display = "none";
    corpoModal.style.zIndex = "-1";
    modal.style.display = "none";
    modal.style.zIndex = "-1";
    overlay.style.display = "none";
    overlay.style.zIndex = "-1";

}) 

</script>
</html>

