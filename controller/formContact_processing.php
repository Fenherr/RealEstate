<?php

// ------Check form------

// Retrieving form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags($_POST["name"]);
    $firstName = strip_tags($_POST["first-name"]);
    $email = strip_tags($_POST["email"]);
    $subject = $_POST["subject"];
    $message = strip_tags($_POST["message"]);

    // Check if all fields are filled
    if (empty($name) || empty($firstName) || empty($email) || empty($subject) || empty($message)) {
        echo "Veuillez remplir tous les champs obligatoires";
        exit(); // Stop script execution
    }

    // Check if name and first name contain only letters and white space
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name) || !preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
        echo "Le nom et le prénom ne doivent contenir que des lettres et des espaces blancs";
        exit(); // Stop script execution
    }

    // Check if email is in a valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format d'email invalide";
        exit(); // Stop script execution
    }

    // Add code for data processing
    echo "Nom : " . $name . "<br>";
    echo "Prénom : " . $firstName . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Sujet : " . $subject . "<br>";
    echo "Message : " . $message . "<br>";

} else {
    echo "Le formulaire n'a pas été soumis";
}


// ------Mail processing------

// Message setting
$message = nl2br("Nom : ".$name. "\n". "Prénom : ".$firstName. "\n". " Email : ".$email. "\n"." message : ".$message);
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Import necessary files
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/Exception.php';


// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gonzalez.patricia2409@gmail.com';      // !!! PROVISIONAL -> will need to use main mail from agency  //SMTP username 
    $mail->Password   = 'mtmuqesqfnggjtxy';                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'RealEstate');
    $mail->addAddress('gonzalez.patricia2409@gmail.com');       // !!! PROVISIONAL -> will need to use contact mail from agency : contact@acgdimmo.fr  //Add a recipient

    //Content
    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}