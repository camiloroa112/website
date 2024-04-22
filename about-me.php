<?php $website = "about-me.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>About me</title>
</head>
<body id="about-me">
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
                            <a class="nav-link px-4 <?php echo $website == "about-me.php" ? "active" : ""; ?>" href="about-me.php">About me</a>
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
    <main class="pb-5">
        <section id="bio">
            <div class="container">
                <h1 class="pt-4 text-center">Biography</h1>
                <!-- <div class="text-center">
                    <img src="img/Work/camilo-travel.jpg" alt="Camilo Roa" class="img-fluid profile mt-4 mx-auto d-block">
                </div> -->
                <p class="pt-3 pb-3 text-center"><i>Militia est vita hominis super terrvm</i></p>
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-xl-6 background2 p-3 mt-3">
                        <p>Hello, and thank you for visiting my website. My name is Camilo Roa. I was born on November 12, 1995, in Bogotá, Colombia. Ever since I can remember, I've been drawn to challenges, sports, in a constant pursuit of knowledge and self-learning. My journey led me to pursue a degree in Industrial Engineering at the Universidad Militar Nueva Granada, driven by a desire to contribute by providing innovative solutions to various industries and everyday life. Around four years ago, I discovered my passion for programming, been captivated by the evolution of technology and the opportunities it presents, the high amount of projects to perform, particularly areas such as web development, data analysis, and process automation.
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-6 background2 p-3 mt-3">
                        <p>
                            I currently have three and a half years of work experience in the field of programming, primarily focusing on creating scripts for process automation using languages such as Python and Snowflake. Additionally, I specialize in data analysis, report creation and management, and executing database table queries as part of quality processes. I've had the privilege of being involved in and leading projects, where I've learned to manage time effectively, implement action plans, and conduct project follow-up meetings. I pride myself on being someone who can work autonomously or as part of a team, always striving towards collective goals rather than individual achievements in a professional environment.
                        </p>
                    </div>
                    <div class="mt-3 p-3 background2">
                        <p>
                            In my free time, I enjoy spending time with my family and friends. I can fully go through any type of plan, although one of my favorite activities is visiting towns with beautiful landscapes, accompanied by delicious food, and capturing moments through photography. I occasionally play soccer as a goalkeeper, and during my vacations, I take the opportunity to travel.
                            <br>
                            <br>
                            If you are interested in learning more about my profile, do not hesitate to contact me. It would be more than an honor for me to share with you.
                            <br>
                            <br>
                            Once again, thank you for visiting my website
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="pii">
            <div class="container">
                <div class="row p-auto">
                    <div class="col-sm-12 col-lg-6 col-xl-3 background mt-3">
                        <h2 class="pt-3 pb-3">About me</h2>
                        <p class="pt-3">Experienced Python developer and data analyst skilled in insightful report
                            building, data visualization, providing added value to assigned tasks, in process automation
                            and optimization.</p>
                        <div class="pt-2 pb-3">
                            <a href="img/Work/CV Camilo Roa.pdf" target="_blank" class="btn btn-more">Download CV</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-3 background2 mt-3">
                        <h2 class="pt-3 pb-3">Personal Info</h2>
                        <p class="pt-3"><b>Birthdate: </b>November 12th, 1995</p>
                        <p><b>Email: </b>camiloroa112@gmail.com</p>
                        <p><b>Phone: </b>(+57) 301-472-5061</p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-3 background mt-3">
                        <h2 class="pt-3 pb-3">My Expertise</h2>
                        <div class="col-12 pt-3">
                            <div class="col-1 d-inline-block">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <div class="col-10 d-inline-block">
                                <p>Process Automation</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-1 d-inline-block">
                                <i class="fa-solid fa-square-poll-horizontal"></i>
                            </div>
                            <div class="col-10 d-inline-block">
                                <p>Data Analysis</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-1 d-inline-block">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="col-10 d-inline-block">
                                <p>Process Improvement</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-3 background2 mt-3">
                        <h2 class="pt-3 pb-3">Soft Skills</h2>
                        <div class="col-12 pt-3">
                            <div class="col-1 d-inline-block">
                                <i class="fa-solid fa-brain"></i>
                            </div>
                            <div class="col-10 d-inline-block">
                                <p>Creativity</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-1 d-inline-block">
                                <i class="fa-solid fa-person-chalkboard"></i>
                            </div>
                            <div class="col-10 d-inline-block">
                                <p>Leadership</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-1 d-inline-block">
                                <i class="fa-regular fa-calendar-xmark"></i>
                            </div>
                            <div class="col-10 d-inline-block">
                                <p>Time Management</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>