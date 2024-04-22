<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set("SMTP", "camiloroa112@gmail.com");
ini_set("smtp_port", "587"); // Adjust the port number as needed
error_reporting(E_ALL);

$website = "contact.php";
$password = file_get_contents('phpmailer/file.txt');

if ($_POST && isset($_POST["submit"])) {
    if (isset($_POST['txtName'])) {
        $name = $_POST['txtName'];
    }

    if (isset($_POST['txtSubject'])) {
        $subject_email = $_POST['txtSubject'];
    }

    if (isset($_POST['txtEmail'])) {
        $email = $_POST['txtEmail'];
    }

    if (isset($_POST['txtTextArea'])) {
        $text = $_POST['txtTextArea'];
    }

    if ($name == "" || $subject_email == "" || $email == "" || $text == "") {
        $message_error = '<div class="alert alert-danger fade show mt-3" role="alert" style="margin-top: 2px; margin-bottom: 2px;">There are one or more fields missing.</div>';
    } 
    
    else 
    {
        $mail = new PHPMailer(true);

        //Server settings
        $mail->isSMTP();                              //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;             //Enable SMTP authentication
        $mail->Username   = 'camiloroa112@gmail.com';   //SMTP write your email
        $mail->Password   = $password;      //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
        $mail->Port       = 465;                                    

        //Recipients
        $mail->setFrom($email, $name); // Sender Email and name
        $mail->addAddress('camiloroa112@gmail.com');     //Add a recipient email  
        $mail->addReplyTo($email, $name); // reply to sender email

        //Content
        $mail->isHTML(true);               //Set email format to HTML
        $mail->Subject = $subject_email;   // email subject headings
        $mail->Body    = $text; //email message

        // Success sent message alert
        $mail->send();
        $message_success = '<div class="alert alert-success fade show mt-3" role="alert" style="margin-top: 2px; margin-bottom: 2px;">Form submitted successfully.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contact</title>
</head>
<!-- Google tag (gtag.js) -->
<script async src=https://www.googletagmanager.com/gtag/js?id=G-HDWTYWVQV2></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-HDWTYWVQV2');
</script>
<body id="contact" class="d-flex flex-column min-vh-100">
    <header class="container">
    <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse text-align-center" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link px-4" href="index.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="about-me.php">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="curriculum.php">Curriculum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo $website == "contact.php" ? "active" : ""; ?>" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container flex-grow-1">
        <div class="row">
            <h1 class="mt-3">Contact me</h1>
            <form method="POST" action="contact.php">
                <div class="form-group">
                    <label for="txtName" class="mt-2 mb-2">Name</label>
                    <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name">
                    <label for="txtSubject" class="mt-2 mb-2">Subject</label>
                    <input type="text" class="form-control" id="txtSubject" name="txtSubject" placeholder="Subject">
                    <label for="txtEmail" class="mt-2 mb-2">Email</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                    <label for="txtTextArea" class="mt-2 mb-2">Message</label>
                    <textarea class="form-control" id="txtTextArea" name="txtTextArea" rows="3" placeholder="Message"></textarea>
                </div>
                <?php
                if (isset($message_error)) {
                    echo $message_error;
                } elseif (isset($message_success)) {
                    echo $message_success;
                }
                ?>
                <button type="submit" name="submit" id="submit" value="POST" class="btn btn-more mt-3">Submit</button>
            </form>
        </div>
    </main>
    <footer class="container d-flex justify-content-between align-items-center border-top">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex pt-4">
            <p class="name">© Camilo Roa</p>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a href="https://github.com/camiloroa112" target="_blank" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
            <li class="ms-3">
                <a href="https://www.linkedin.com/in/camilo-r-78a245160/" target="_blank" title="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </li>
            <li class="ms-3">
                <a href="https://www.instagram.com/camilo.roa1/" target="_blank" title="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
        </ul>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>
