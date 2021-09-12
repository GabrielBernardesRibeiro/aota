<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo css_path ?>essential.css">
    <link rel="stylesheet" href="<?php echo css_path ?>home.css">
    <script src="https://kit.fontawesome.com/9ff70c39e0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>AOTA desenvolvimentos</title>
</head>
<body>
    
    <?php include 'header.php'; ?>

    <section class="description">
        <h1>AOTA Desenvolvimentos</h1>
        <p>Seja bem-vindo ao meu website! Me chamo Gabriel Bernardes Ribeiro, tenho 21 anos, atualmente sou estudante na Universidade de São Paulo e trabalho com desenvolvimento de sistemas web.
        </p>

        <a href="<?php echo site_path ?>services">Confira alguns projetos!</a>
    </section>

    <section class="projects">
        <div class="project_single">
            <div class="image">
                <img src="<?php echo image_path ?>aeconomia.png">
            </div>
            <div class="text">
                <h1>Aeconomia</h1>
                <p>Loja virtual, desenvolvida totalmente com php, css e javascript e sem a utilização de nenhum framework.</p>
            </div>
            <div class="button">
                <a target="_blank" href="https://aeconomia.com.br">Acessar Aeconomia!</a>
            </div>
        </div>

        <div class="project_single">
            <div class="image">
                <img src="<?php echo image_path ?>fabricia_santos.png">
            </div>
            <div class="text">
                <h1>Fabricia santos</h1>
                <p>Landing page, desenvolvida totalmente com php, css e javascript e sem a utilização de nenhum framework.</p>
            </div>
            <div class="button">
                <a target="_blank" href="http://fabriciasantos.adv.br">Acessar Fabricia santos!</a>
            </div>
        </div>

        <div class="project_single">
            <div class="image">
                <img src="<?php echo image_path ?>bernardes_arquitetura.png">
            </div>
            <div class="text">
                <h1>Bernardes</h1>
                <p>ERP, desenvolvido para que o arquiteto possa controlar projetos e financeiro de sua empresa.
                    Sistema totalmente desenvolvido com php, css e javascript e sem a utilização de nenhum framework.
                </p>
            </div>
            <div class="button">
                <a target="_blank" href="https://bernardes.arq.br">Acessar Bernardes!</a>
            </div>
        </div>

        <div class="project_single">
            <div class="image">
                <img src="<?php echo image_path ?>glince.png">
            </div>
            <div class="text">
                <h1>Glince</h1>
                <p>Landing page, desenvolvida totalmente com php, css e javascript e sem a utilização de nenhum framework.</p>
            </div>
            <div class="button">
                <a target="_blank" href="https://glince.com.br">Acessar Glince!</a>
            </div>
        </div>

        <div class="project_single">
            <div class="image">
                <img src="<?php echo image_path ?>pedido_web_glince.png">
            </div>
            <div class="text">
                <h1>Pedido WEB Glince</h1>
                <p>ERP desenvolvido para que os clientes possam fazer encomendas dos produtos da empresa Glince.
                    Sistema utilizando somente php, css e javascript e sem a utilização de nenhum framework.</p>
            </div>
            <div class="button">
                <a target="_blank" href="https://pedidoweb.glince.com.br">Acessar Pedido WEB!</a>
            </div>
        </div>

        <div class="project_single">
            <div class="image">
                <img src="<?php echo image_path ?>api.png">
            </div>
            <div class="text">
                <h1>API</h1>
                <p>API totalmente funcional desenvolvida para estudos</p>
            </div>
            <div class="button">
                <a target="_blank" href="https://pokedex.aota.dev.br">Acessar API!</a>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
<script src="<?php echo js_path ?>header_navigation.js"></script>
</body>
</html>