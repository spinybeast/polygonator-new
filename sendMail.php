<?php
$name = trim(htmlspecialchars($_POST['name']));
$phone = trim(htmlspecialchars($_POST['phone']));
$email = trim(htmlspecialchars($_POST['email']));
$message = trim(htmlspecialchars($_POST['message']));

if (!empty($name) && !empty($email) && !empty($message)) {
    $to = 'polygonator3d@gmail.com';
    $subject = 'Обращение с сайта Polygonator';

    $mailText = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Имя: ' . $name . '</p>
                        <p>Телефон: ' . $phone . '</p>                        
                        <p>Email: ' . $email . '</p>                        
                        <p>Сообщение: ' . $message . '</p>                        
                    </body>
                </html>';

    $headers = 'Content-type: text/html; charset=utf-8 \r\n';
    $headers .= 'From: ' . $email;
    mail($to, $subject, $mailText, $headers);
}