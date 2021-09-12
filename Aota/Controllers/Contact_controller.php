<?php 
	namespace Aota\Controllers;
    use \Aota\Views\Main_view as Main_view;
    use \Aota\Mailer as Mailer;
	
	class Contact_controller{
		public function index(){

            $messages = array();
            if (isset($_POST['send']))
            {

                if (filter_var($_POST['name'], FILTER_SANITIZE_EMAIL))
                {
                    $option = filter_var($_POST['option'], FILTER_SANITIZE_STRING);
                    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                    $telefone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
                    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

                    $message_inputed = 'Nome: '.$name.'<br>';
                    $message_inputed.= 'Opção: '.$option.'<br>';
                    $message_inputed.= 'Telefone: '.$telefone.'<br>';
                    $message_inputed.= 'Email: '.$email.'<br>';
                    $message_inputed.= 'Message: '.$message.'<br>';
                    $send_mail = Mailer::send(email_username, 'AOTA', 'Novo contato pelo site', $message_inputed);
                    $messages['success'] = 'Email enviado! obrigado por entrar em contato';
                } else $messages['error'] = 'Ops, email inválido';
                
            }
			
            Main_view::render('contact', $messages);
			
		}
	}
?>