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

    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $_message = $_POST['message'];

    // $to = 'ezirs09@gmail.com';
    // $subject = $name . ' || Contect Me';
    // $message = '
    // <html>
    //     <head>
    //     <style>
    //         .text-center {
    //             text-align: center !important
    //         }
    //         .text-dark {
    //             --bs-text-opacity: 1;
    //             color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important
    //         }
    //     </style>
    //     </head>
    //     <body>
    //         <h1 class="text-center text-dark">'. $_message .'</h1>
    //     </body>
    // </html>
    // ';

    // $headers[] = 'MIME-Version: 1.0';
    // $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // if (mail($to, $subject, $message, implode("\r\n", $headers))) {
    //     $replay_to = $email;
    //     $replay_subject = 'Thanks for the message';
    //     $replay_message = 'Thank you for visiting my website and the message you sent.';
    //     mail($replay_to, $replay_subject, $replay_message, implode("\r\n", $headers));
    //     echo 'true';
    // } else {
    //     echo 'false';
    // }
    
?>