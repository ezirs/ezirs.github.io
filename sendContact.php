<?php

    require __DIR__ . '/vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['token'])) {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
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

            $mail->FromName   = "Mailer";
            $mail->WordWrap   = 50;
            $mail->addAddress('ezirs09@gmail.com');
            $mail->IsHTML(true);
            $mail->Subject    = $name . ' || Contect Me';
            $mail->Body       = $message;
            if(!$mail->send()) {
                echo 0;
            } else {
                echo 1;
            }
        } else {
            echo 'validation';
        }
    } else {
    ?>
<script>
document.location = "index.php";
</script>
<?php
    }
?>