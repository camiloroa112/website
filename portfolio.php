<?php $website = "portfolio.php";?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Portfolio</title>
</head>
<body id="portfolio">
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
                            <a class="nav-link px-4" href="index.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="about-me.php">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo $website == "portfolio.php" ? "active": "";?>" href="portfolio.php">Portfolio</a>
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
    <main class="pb-5">
        <section id="projects">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mt-3">Project</h1>
                        <p class="pt-3 intro">These are some projects I have developed:</p>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <img src="img/Projects/efficient-frontier.png" alt="" class="img-fluid">
                        <div class="background pb-3">
                            <h2 class="text-center">Efficient Frontier</h2>
                            <div class="px-2">
                                <p>Python project showcasing the efficient frontier graph, representing profit maximization subject to risk. It allows identifying the optimal point where a combination of assets yields higher returns based on the assumed risk in the operation.</p>
                                <p>Source code:
                                    <a title="In Progress">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Python</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Pandas</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Matplotlib</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Jupyter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-1">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/Website/Inicio.png" class="d-block w-100 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Website/Portafolio.png" class="d-block w-100 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Website/Hoja de Vida.png" class="d-block w-100 img-fluid" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="background pb-3">
                            <h2 class="text-center">Mi Página Web</h2>
                            <div class="px-2">
                                <p>Presentation of the source code and the public repository on GitHub containing the files used in the development of the current website. The page features responsive design with Bootstrap, dynamic loading of tags using Ajax upon page load, and styling with CSS3.</p>
                                <p>Source code:
                                    <a href="https://github.com/camiloroa112/website" target="_blank" title="Website">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">HTML</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Bootstrap</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">CSS3</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">PHP</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <video playsinline class="img-fluid" autoplay loop muted>
                            <source src="img/Projects/amp-exporter.mp4" type="video/mp4">
                        </video>
                        <div class="background pb-3">
                            <h2 class="text-center">AMP Exporter</h2>
                            <div class="px-2">
                                <p>Project that automates table creation and query execution in Snowflake based on instructions entered within a dictionary in Jupyter Notebook. The program writes queries, generates Excel reports, and offers additional functionalities to perform specific tasks.</p>
                                <p>Source code:
                                    <a title="Not Available">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Python</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Snowflake</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Jupyter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <img src="img/Projects/portfolio.png" alt="" class="img-fluid">
                        <div class="background pb-3">
                            <h2 class="text-center">Portfolio</h2>
                            <div class="px-2">
                                <p>Exercise proposed by the DePC Suite academy, putting into practice the knowledge acquired in tools such as HTML5, CSS3, and Bootstrap by replicating a webpage considering its styles, responsive design, separation of elements by columns, and semantic use of tags.</p>
                                <p>Source code:
                                    <a href="https://github.com/camiloroa112/portfolio"  title="GitHub">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">HTML</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Bootstrap</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">CSS3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="1800">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/Dashboard/Demo 1.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/Demo 2.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/Digital Ranker.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/Interests.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/Location.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/Mapping & DMA.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/Personicx.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/Psychographics.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Dashboard/TV Program Ranker.png" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                        
                        <div class="background pb-3">
                            <h2 class="text-center">HVA Dashboard</h2>
                            <div class="px-2">
                                <p>Project that automates Excel report generation by executing Snowflake queries from Jupyter Notebook, being imported into Tableau. The Dashboard presents high-value insights about audience demographics, interests, location, and other profiling aspects.</p>
                                <p>Source code:
                                    <a title="Not Available">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Jupyter</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Snowflake</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Tableau</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <img src="img/Projects/snowflake-upload.png" alt="" class="img-fluid">
                        <div class="background pb-3">
                            <h2 class="text-center">Upload Snowflake</h2>
                            <div class="px-2">
                                <p>Python script designed to upload various Excel files as tables into Snowflake. The program removes special characters from headers, adjusts data types in each column to SQL type, ensuring successful loading into a specific database.</p>
                                <p>Source code:
                                    <a href="https://github.com/camiloroa112/upload-snowflake/tree/main" target="_blank"
                                        title="GitHub">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Python</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Snowflake</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Jupyter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <video playsinline class="img-fluid d-block w-100" autoplay loop muted>
                            <source src="img/Projects/email-reply-send.mp4" type="video/mp4">
                        </video>
                        <div class="background pb-3">
                            <h2 class="text-center">Email Reply - Send</h2>
                            <div class="px-2">
                                <p>Python script developed to send bulk emails with a preconfigured HTML format and autofile attachment via Outlook. Recipients are specified through an Excel file, with an additional option for preserving the format of email replies.</p>
                                <p>Source code:
                                    <a href="https://github.com/camiloroa112/email-send-reply" target="_blank"
                                        title="GitHub">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Python</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Outlook</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Jupyter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <img src="img/Projects/arl-fill-2.png" alt="" class="img-fluid">
                        <div class="background pb-3">
                            <h2 class="text-center">ARL Fill Form</h2>
                            <div class="px-2">
                                <p>Python script primarily designed to autocomplete a safety workplace form mandated by the government on a website. Subsequently, the program accesses and fills out an additional form on SharePoint as required by the company.</p>
                                <p>Source code:
                                    <a href="https://github.com/camiloroa112/arl-form-fill" target="_blank"
                                        title="GitHub">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Python</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Selenium</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 pb-3">
                        <img src="img/Projects/excel-cleanser.png" alt="" class="img-fluid">
                        <div class="background pb-3">
                            <h2 class="text-center">Excel Cleanser</h2>
                            <div class="px-2">
                                <p>Python script designed to perform cleaning, sorting, and consolidation processes on various Excel reports downloaded from SAP. It contains different inputs to guide the user on the desired instruction (consolidation or transformation) and the status of the process.</p>
                                <p>Source code:
                                    <a href="https://github.com/camiloroa112/excel-cleanser/tree/main" target="_blank"
                                        title="GitHub">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </p>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Python</a>
                                            </div>
                                        </div>
                                        <div class="pb-2 d-inline-block">
                                            <div
                                                class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 resource">
                                                <a href="">Pandas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container d-flex flex-wrap justify-content-between align-items-center border-top">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>