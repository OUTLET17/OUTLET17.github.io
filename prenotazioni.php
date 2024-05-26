<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $content = $_POST["content"];

    $to = "gestioneattivitay@email.com"; // Inserisci il tuo indirizzo email qui
    $subject = "Nuova prenotazione";
    $message = "Nome: $name\n";
    $message .= "Email: $email\n";
    $message .= "Contenuto della prenotazione:\n$content";

    // Invia l'email
    if (mail($to, $subject, $message)) {
        // Reindirizza l'utente dopo l'invio del modulo
        header("Location: conferma.html");
        exit;
    } else {
        // Se l'invio dell'email fallisce, gestisci l'errore qui
        echo "Si è verificato un errore durante l'invio della prenotazione.";
    }
}
?>
