<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collectez les données du formulaire
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Adresse e-mail où vous souhaitez recevoir les formulaires de contact
    $to = "votre@email.com";

    // Sujet de l'e-mail
    $subject = "Nouveau formulaire de contact de $name";

    // Corps du message
    $message = "Nom et prénom: $name\n";
    $message .= "Numéro de téléphone: $phone\n";
    $message .= "Adresse e-mail: $email\n";
    $message .= "Date de rendez-vous: $date\n";
    $message .= "Heure de rendez-vous: $time\n";

    // En-têtes
    $headers = "De: $email\r\n";

    // Envoi de l'e-mail
    mail($to, $subject, $message, $headers);

    // Redirection après l'envoi du formulaire
    header("Location: merci.html");
    exit;
}
?>
