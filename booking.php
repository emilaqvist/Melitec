<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hämta data från formuläret
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];

    // E-postinställningar
    $to = "info@melitec.se";  // E-postadressen som ska ta emot bokningen
    $subject = "Ny bokning från $name"; // Ämnet för e-posten

    // Meddelandets innehåll
    $message = "Ny bokning från $name.\n\n";
    $message .= "Tjänst: $service\n";
    $message .= "Datum: $date\n";
    $message .= "E-post: $email\n";

    // Headers för att ange avsändare (från vilken e-post det skickas)
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Skicka e-posten
    if (mail($to, $subject, $message, $headers)) {
        echo "Tack för din bokning! Vi har mottagit din förfrågan.";
    } else {
        echo "Det gick inte att skicka din bokning. Vänligen försök igen senare.";
    }
}
?>
