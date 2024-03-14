<?php
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // check required fields
    if (!empty($_POST["name"]) && !empty($_POST["first-name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
        // Retrieving form data
        $name = $_POST["name"];
        $firstName = $_POST["first-name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // add code for data processing
        echo "Nom : " . $name . "<br>";
        echo "Prénom : " . $firstName . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Sujet : " . $subject . "<br>";
        echo "Message : " . $message . "<br>";
    } else {
        echo "Veuillez remplir les champs obligatoires";
    }
}    
?>

<!-- mail processing-->
<?php
// Form variables
$nom = $_POST['name'];
$prenom = $_POST['first-name'];
$email = $_POST['email'];
$sujet = $_POST['subject'];
$message = $_POST['message'];

// Message setting
$message = "Nom : ".$nom. "\n"." Email : ".$email. "\n"." message : ".$message;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Import necessary files
require './asset/php/PHPMailer/src/PHPMailer.php';
require './asset/php/PHPMailer/src/SMTP.php';
require './asset/php/PHPMailer/src/Exception.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gonzalez.patricia2409@gmail.com';      // !!! PROVISIONAL -> will need to use main mail from agency  //SMTP username 
    $mail->Password   = 'mtmu_qesq_fngg_jtxy';                  //SMTP password
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