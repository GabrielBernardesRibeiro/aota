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
    <link rel="stylesheet" href="<?php echo css_path ?>contact.css">
    <script src="https://kit.fontawesome.com/9ff70c39e0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>AOTA desenvolvimentos</title>
</head>
<body>

    <?php include 'header.php'; ?>

    <?php if (isset(($message['error']))){ ?>
        <section class="box_messages">
            <div class="messages fail">
                <h1 class="fail"><?php echo $message['error'] ?></h1>
            </div>
        </section>
    <?php } ?>

    <?php if (isset(($message['success']))){ ?>
        <section class="box_messages">
            <div class="messages success">
                <h1 class="success"><?php echo $message['success']; ?></h1>
            </div>
        </section>
    <?php } ?>

    <section class="contact">
        <h1>Entre em contato comigo</h1>
        <form method="post">
            <div class="box_select">
                <label>Escolha uma opção</label>
                <select name="option" required>
                    <option value="">Nenhum opção selecionada</option>
                    <option value="lading_page">Landing Page para seu negócio</option>
                    <option value="loja_virtual">Loja virtual para sua empresa</option>
                    <option value="pedido_web">Pedido web para sua empresa</option>
                    <option value="agendamento">Sistema de agendamento para sua clínica</option>
                    <option value="ead">Plataforma EAD</option>
                    <option value="portifolio">Portfólio online</option>
                    <option value="edicao">Edição de vídeos para seu canal do youtube</option>
                    <option value="delivery">Sistema de delivery</option>
                    <option value="controle_financeiro">Sistema de controle financeiro</option>
                    <option value="outros">Outros</option>
                </select>
            </div>
            <div class="box_input">
                <label>Nome</label>
                <input type="text" name="name" required>
            </div>
            <div class="box_input">
                <label>Email</label>
                <input type="text" name="email" required>
            </div>
            <div class="box_input">
                <label>Telefone</label>
                <input type="text" name="phone" required>
            </div>
            <div class="box_textarea">
                <label>Mensagem</label>
                <textarea name="message"></textarea>
            </div>
            <div class="box_button">
                <button name="send">ENVIAR</button>
            </div>
        </form>
    </section>

    <section class="social">
        <h1>Me mande uma mensagem</h1>
        <div class="box_social">
            <div class="social_single">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <a target="_blank" href="https://wa.me/11988030550">011 9 8803-0550</a>
            </div>
            <div class="social_single">
                <i class="fab fa-linkedin-in"></i>
                <a target="_blank" href="https://www.linkedin.com/in/gabriel-bernardes-ribeiro/">Gabriel Bernardes Ribeiro</a>
            </div>
            <div class="social_single">
                <i class="fab fa-github"></i>
                <a target="_blank" href="https://github.com/GabrielBernardesRibeiro/curriculo">Gabriel Bernardes Ribeiro</a>
            </div>
            <div class="social_single">
                <i class="fab fa-twitter"></i>
                <a target="_blank" href="https://twitter.com/Gabriel_aota">@Gabriel_aota</a>
            </div>
            <div class="social_single">
                <i class="fas fa-envelope"></i>
                <a>contato@aota.dev.br</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

<script src="<?php echo js_path ?>header_navigation.js"></script>
</body>
</html>