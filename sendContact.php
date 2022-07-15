<?php

    require __DIR__ . '/vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $_message = $_POST['message'];

    $message = '
        <html>
            <head>
                <style>
                    #text-center {
                        text-align: center;
                    }
                    .text-dark {
                        --bs-text-opacity: 1;
                        color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity));
                    }
                </style>
            </head>
            <body>
                <h1 id="text-center" class="text-dark">'. $_message .'</h1>
            </body>
        </html>
    ';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->Username   = "oik13052003@gmail.com";
    $mail->Password   = "scbwuckjfygyxlom";

    $mail->From       = "yorandayorick09@gmail.com";
    $mail->FromName   = "Mailer";
    $mail->WordWrap   = 50;
    $mail->addAddress('ezirs09@gmail.com');
    $mail->IsHTML(true);
    $mail->Subject    = $name . ' || Contect Me';
    $mail->Body       = $message;
    if(!$mail->send()) {
        echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }
    
?>