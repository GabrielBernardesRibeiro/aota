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
    <link rel="stylesheet" href="<?php echo css_path ?>services.css">
    <script src="https://kit.fontawesome.com/9ff70c39e0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>AOTA desenvolvimentos</title>
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="services">
        <h1 class="title">Serviços Disponíveis</h1>
        <div class="service_single">
            <img src="<?php echo image_path ?>ead.png">
            <div class="text">
                <h1>Plataforma EAD</h1>
                <p>
                    Plataforma de ensino a distância. Ideal para escolas, 
                    treinamento de pessoas ou para que você poste seus próprios cursos
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>

        <div class="service_single">
            <img src="<?php echo image_path ?>landing_page.png">
            <div class="text">
                <h1>Landing page</h1>
                <p>
                    Uma página web simples. Ideal para qualquer tipo de negócio que deseja ganhar visibilidade.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>

        <div class="service_single">
            <img src="<?php echo image_path ?>loja_virtual.png">
            <div class="text">
                <h1>Loja virtual</h1>
                <p>
                    Loja virtual para quem quer vender seus produtos online. 
                    Ideal para revendedores, artesãos etc.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>

        <div class="service_single">
            <img src="<?php echo image_path ?>agendamento.png">
            <div class="text">
                <h1>Agendamento</h1>
                <p>
                    Sistema de agendamento online. 
                    Ideal para clínicas médicas, de clínicas de fisioterapia, clínicas de estética, barbeiros entre outros.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>

        <div class="service_single">
            <img src="<?php echo image_path ?>pedido_web.png">
            <div class="text">
                <h1>Pedido web</h1>
                <p>
                    Sistema de pedidos web. 
                    Ideal para fábricas e revendedores que trabalham sob demanda.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>

        <div class="service_single">
            <img src="<?php echo image_path ?>portfolio.png">
            <div class="text">
                <h1>Portfólio</h1>
                <p>
                    Portfólio online.
                    Ideal para exibir seus projetos já concluidos, os que ainda estão em desenvolvimento
                    e para apresentar em entrevistas.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>
        
        <div class="service_single">
            <img src="<?php echo image_path ?>controle.png">
            <div class="text">
                <h1>Controle financeiro</h1>
                <p>
                    Sistema de controle financeiro.
                    Ideal para todos que desejam manter um acesso
                    fácil aos seus gastos em qualquer lugar.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>

        <div class="service_single">
            <img src="<?php echo image_path ?>delivery.png">
            <div class="text">
                <h1>Delivery</h1>
                <p>
                    Serviço de entrega.
                    Ideal para pizzarias, lanchonetes e restaurantes que desejam ter um aplicativo próprio.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>

        <div class="service_single">
            <img src="<?php echo image_path ?>edicao.png">
            <div class="text">
                <h1>Edição de vídeos</h1>
                <p>
                    Serviço de edição de vídeos.
                    Ideal para quem precisa editar um video, seja pro seu canal do youtube ou para apresentação.
                </p>
            </div>
            <div class="button">
                <a href="<?php echo site_path ?>contact">Entrar em contato</a>
            </div>
        </div>
        
        <div class="clear"></div>
    </section>
    <div class="clear"></div>
    
    <?php include 'footer.php'; ?>

<script src="<?php echo js_path ?>header_navigation.js"></script>
</body>
</html>