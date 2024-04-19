<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    ini_set("SMTP", "camiloroa112@gmail.com");
    ini_set("smtp_port", "587"); // Adjust the port number as needed
    error_reporting(E_ALL);
    
    $website = "contact.php";
    
    if($_POST && isset($_POST["submit"]))
    {
        if(isset($_POST['txtName']))
        {
            $name = $_POST['txtName'];
        }

        if(isset($_POST['txtSubject']))
        {
            $subject_email = $_POST['txtSubject'];
        }

        if(isset($_POST['txtEmail']))
        {
            $email = $_POST['txtEmail'];  
        }

        if(isset($_POST['txtTextArea']))
        {
            $text = $_POST['txtTextArea'];
        }        

        if($name == "" || $subject_email == "" || $email == "" || $text == "")
        {
            $message_error = '<div class="alert alert-danger fade show mt-3" role="alert" style="margin-top: 2px; margin-bottom: 2px;">There are one or more fields missing.</div>';  
        }

        else
        {
            mail($to = 'camiloroa112@gmail.com', $subject = $subject_email, $message = $text, $headers = "From: $email".'\r\n' . "You got an email sent by: $name");
            $message_success = '<div class="alert alert-success fade show mt-3" role="alert" style="margin-top: 2px; margin-bottom: 2px;">Form submitted successfully.</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body id="contact" class="d-flex flex-column h-100">
    <header class="container">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link px-4 <?php echo $website == "contact.php" ? "active": "";?>" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container h-100">
        <div class="row">
            <h1 class="mt-3">Contact me</h1>
            <form method="POST" action="contact.php">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="mt-2 mb-2">Name</label>
                    <input type="txtName" class="form-control" id="txtName" name="txtName" placeholder="Name">
                    <label for="exampleInputEmail1" class="mt-2 mb-2">Subject</label>
                    <input type="txtSubject" class="form-control" id="txtSubject" name="txtSubject" placeholder="Subject">
                    <label for="exampleInputEmail1" class="mt-2 mb-2">Email</label>
                    <input type="txtEmail" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                    <label for="exampleFormControlTextarea1" class="mt-2 mb-2">Message</label>
                    <textarea class="form-control" id="txtTextArea" name="txtTextArea" rows="3" placeholder="Message"></textarea>
                </div>
                <?php 
                    if(isset($message_error))
                    {
                        echo $message_error;
                    }
                    elseif(isset($message_success))
                    {
                        echo $message_success;
                    }
                ?>
                <button type="submit" name="submit" id="submit" value="POST" class="btn btn-more mt-3">Submit</button>
            </form>
        </div>
    </main>
</body>
<footer class="container d-flex flex-wrap justify-content-between align-items-center mt-auto border-top">
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

</html>