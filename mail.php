<?php
    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;

    use PHPMailer\PHPMailer\SMTP;



    require 'phpmailer/Exception.php';

    require 'phpmailer/PHPMailer.php';

    require 'phpmailer/SMTP.php';

    $title = "Заявка с сайта xt.pl";

    $mail = new PHPMailer();

    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 

    $mail->isSMTP(); 

    $mail->Host = 'smtp.yandex.ru';

    $mail->SMTPAuth = true;

    //$mail->SMTPDebug = 2;

    $mail->Username = 'v.korpik2010@yandex.by';

    $mail->Password = 'plbdwyueftajxlkg';
    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    $mail->Port = 465;

    $mail->CharSet = 'UTF-8';

    $mail->Subject = $title;

    $mail->setFrom('v.korpik2010@yandex.by', 'XT');

    $firstname = trim($_POST['firstname']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $mail->msgHTML("

    <h2>Детали заявки</h2>
    
    <b>Имя:</b> $firstname<br>

    <b>Email:</b> $email<br>

    <b>Сообщение:</b> $message<br>

    ");

    $mail->addAddress('v.korpik2010@yandex.com');

    if(!$mail->send()) {

        echo 'Сообщение не может быть отправлено.';

        echo 'Ошибка: ' . $mail->ErrorInfo;

        exit;

    }

    else{

        echo 'Сообщение отправлено.';

    }
?>