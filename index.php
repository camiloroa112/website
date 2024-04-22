<?php $website = "index.php";?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Menu</title>
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
<body id="menu" class="d-flex flex-column h-100">
    <header class="container">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse text-align-center" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo $website == "index.php" ? "active": "";?>" href="index.php">Menu</a>
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
                            <a class="nav-link px-4" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container h-100">
        <section id="welcome" class="h-100">
            <div class="row h-100">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="d-flex flex-column">
                        <div class="my-auto">
                            <h1 class="pb-2 p-3 text-center m-auto p-auto d-block hello">Welcome to my website</h1>
                            <div class="text-center pt-2">
                                <a href="about-me.php" class="btn btn-more">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container d-flex flex-wrap justify-content-between align-items-center mt-auto border-top">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex pt-4">
            <p class="name">© Camilo Roa</p>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a href="https://github.com/camiloroa112/" target="_blank" title="GitHub">
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