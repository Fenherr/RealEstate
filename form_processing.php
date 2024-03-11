<?php
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $name = $_POST['name'];
    $firstName = $_POST['first-name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

// add code for data processing
    echo "Nom : " . $name . "<br>";
    echo "Prénom : " . $firstName . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Sujet : " . $subject . "<br>";
    echo "Message : " . $message . "<br>";
} else {
    echo "Veuillez remplir les champs obligatoires";
}
?>




