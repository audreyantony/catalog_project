<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'contact.user.model.php';

// CONTROLLER CODE

// CLEANING ENTRIES
$nameEntry = isset($_POST['sign_in_nickname']) ? entryCleaning($_POST['name']) : "";
$mailEntry = isset($_POST['sign_in_nickname']) ? entryCleaning($_POST['mail']) : "";
$messageEntry = isset($_POST['sign_in_nickname']) ? entryCleaning($_POST['message']) : "";

$warning = "";

// LIST OF THE SHOPS
$shops = shopInfoSelect($db);

// SENDING MAIL
if (isset($_POST['sendForm'])){
    if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])) {
        $to = "audrey@calzi.fr";
        $subject = "Mail de la part de ".$nameEntry.", ".$mailEntry.".";
        $message = '<html lang="en">
<body>
<style type="text/css"></style>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&display=swap" rel="stylesheet">

<div style="background-color: #f5f5ee; margin: 0 auto;width: 100%; height: 100vh;padding: 50px 0;">
    <div style="background-color: #472d30; width: 80%; min-height: 250px; text-align: center;margin: 150px auto;">
        <h3 style="font-family: \'Bebas Neue\', sans-serif; font-size: 5em; color: #E26d5c;text-shadow: 1px 1px #472d30;position: relative; bottom: 45px; right: 33%">New mail</h3>
        <p style="padding: 50px; margin-top: -120px; color: #E26d5c;font-family: \'Montserrat\', sans-serif; text-align:justify;">'.$messageEntry.'</p>
        <p style="padding: 20px 50px 50px 0; margin-top: -80px; color: #E26d5c;font-family: \'Montserrat\', sans-serif; text-align:right; font-size: 1.3em;">Send by : '.$nameEntry.', '.$mailEntry.'</p>
    </div>

</div>
</body>
</html>';

        $headers = array(
            'From' => 'All-natural Artifacts || Contact form',
            'Reply-To' => $mailEntry,
            'X-Mailer' => 'PHP/' . phpversion(),
            'MIME-version' => '1.0',
            'Content-type' => 'text/html; charset=UTF-8'
        );

        if(mail($to, $subject, $message, $headers)) {
            $warning = "Your message has been sent, we'll respond as soon as possible !";
        } else {
            $warning = "Something went wrong, please retry";
        }

    } else {
        $warning = "Please fill all fields !";
    }
}

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'contact.user.view.php';