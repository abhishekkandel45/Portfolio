<!-- Data recording from the contact form -->
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = '
    <?php
        echo $email;
    ?>
    ';
    $subject = 'Message from a site visitor ' . $name;
    $body = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Message from a site visitor</h1>
        <p>Name: ' . $name . '</p>
        <p>Email: ' . $email . '</p>
        <p>Message: ' . $message . '</p>
    </body>
    </html>
    ';
    $headers = "From: $name <$email> \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to, $subject, $body, $headers);
    header("Location: contact.php?mailsend");
?>
