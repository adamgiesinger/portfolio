<?php
header('Content-Type: application/json');

if (isset($_GET["email"], $_GET["name"], $_GET["message"])) {

    try {

        $receiverMail = "adam.giesinger@gmail.com";
        $email = $_GET["email"];
        $name = $_GET["name"];
        $message = nl2br($_GET["message"]);
        $time = date("H");
        $timezone = date("e");

        if ($time < "12") {
            $zeit = "Guten Morgen";
        } else if ($time >= "12" && $time < "17") {
            $zeit = "Guten Tag";
        } else if ($time >= "17") {
            $zeit = "Guten Abend";
        }

        $subject = 'Anfrage via adamgiesinger.ch';
        $message = <<<nachricht
<html>
<head>
	<meta charset="utf-8">
    <title>Anfrage via adamgiesinger.ch</title>
    <style>
        
    </style>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <p>$zeit Adam</p>
        <p>$name ($email) hat auf Sie &uuml;ber Ihr Formular auf Ihrer Portfolio Website kontaktiert. Die folgende Nachricht wurde eingegeben:</p>
        <blockquote>$message</blockquote>
        <p>Freundliche Gr&uuml;sse</p>
        <p>Athene</p>
    </div>
</div>
</body>
</html>
nachricht;
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'To: $mail' . "\r\n";
        $headers .= 'From: Athene AI <athene-ai@adamgiesinger.ch>' . "\r\n";
        mail($receiverMail, $subject, $message, $headers);
        echo json_encode(["Response" => "True"]);

    } catch (Exception $e) {
        echo json_encode(["Response" => "False"]);
    }
} else {
    echo json_encode(["Response" => "False"]);
}