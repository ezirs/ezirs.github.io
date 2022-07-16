## Installation

```
composer require phpmailer/phpmailer
```

### sendContact.php

```
<?php
    require __DIR__ . '/vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['submit'])) {
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
        $mail->Username   = "user@example.com";
        $mail->Password   = "secret";

        $mail->From       = "from@example.com";
        $mail->FromName   = "Mailer";
        $mail->WordWrap   = 50;
        $mail->addAddress('ezirs@example.com');
        $mail->IsHTML(true);
        $mail->Subject    = $name . ' || Contect Me';
        $mail->Body       = $message;
        if(!$mail->send()) {
            echo 0;
        } else {
            echo 1;
        }
    } else {
?>
<script>
document.location = "index.html";
</script>
<?php
    }
?>
```
