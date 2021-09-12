<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" target="_blank" href="https://fonts.googleapis.com">
    <link rel="preconnect" target="_blank" href="https://fonts.gstatic.com" crossorigin>
    <link target="_blank" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" target="_blank" href="<?php echo css_path ?>essential.css">
    <link rel="stylesheet" target="_blank" href="<?php echo css_path ?>curriculo.css">
    <script src="https://kit.fontawesome.com/9ff70c39e0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>AOTA desenvolvimentos</title>
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="box_curriculo">
        <h1 class="title">Meu currículo</h1>

        <div class="certified_single">
            <i class="far fa-id-badge"></i>
            <a target="_blank" href="<?php echo pdf_path ?>curriculo_gabriel.pdf">Currículo completo</a>
            <i class="fas fa-file-download"></i>
        </div>

        <div class="certified_single">
            <i class="fas fa-award"></i>
            <a target="_blank" href="<?php echo pdf_path ?>Desenvolvimento_web_completo.pdf">Desenvolvimento web completo</a>
        </div>

        <div class="certified_single">
            <i class="fas fa-award"></i>
            <a target="_blank" href="<?php echo pdf_path ?>php_completo.pdf">PHP completo</a>
        </div>

        <div class="certified_single">
            <i class="fas fa-award"></i>
            <a target="_blank" href="<?php echo pdf_path ?>Desenvolvedor_Web.pdf">Desenvolvedor web</a>
        </div>

        <div class="certified_single">
            <i class="fas fa-award"></i>
            <a target="_blank" href="<?php echo pdf_path ?>certificado_nodejs_mongodb.pdf">Certificado nodejs e mongodb</a>
        </div>

        <div class="certified_single">
            <i class="fas fa-award"></i>
            <a target="_blank" href="<?php echo pdf_path ?>Certificado_Curso_Banco_de_Dados.pdf">Banco de Dados</a>
        </div>


        <div class="certified_single">
            <i class="fas fa-award"></i>
            <a target="_blank" href="<?php echo pdf_path ?>Python_&_MySQL.pdf">Python & MySql</a>
        </div>

        <div class="certified_single">
            <i class="fas fa-award"></i>
            <a target="_blank" href="<?php echo pdf_path ?>Orientação_a_Objetos_com_Python.pdf">Orientação a Objetos com Python</a>
        </div>
    </section>

    <?php include 'footer.php'; ?>

<script src="<?php echo js_path ?>header_navigation.js"></script>
</body>
</html>