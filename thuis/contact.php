<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verzamel de formuliergegevens
    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $bericht = htmlspecialchars($_POST['bericht']);

    // Instellen van de e-mail
    $to = "senne1308@gmail.com";  // Vervang door je eigen e-mailadres
    $subject = "Nieuw bericht van $naam via het contactformulier";
    $message = "Naam: $naam\nE-mail: $email\n\nBericht:\n$bericht";
    $headers = "From: $email";

    // Verstuur de e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Bedankt voor je bericht! We nemen spoedig contact met je op.";
    } else {
        echo "Er ging iets mis. Probeer het opnieuw.";
    }
}
?>
