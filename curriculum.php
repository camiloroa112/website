<?php $website = "curriculum.php";?>
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
    <title>Curriculum</title>
</head>
<body id="curriculum">
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
                            <a class="nav-link px-4" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="about-me.php">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo $website == "curriculum.php" ? "active": "";?>" href="curriculum.php">Curriculum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="profile-name">
        <div class="container p-auto">
            <div class="row profile-contact">
                <div class="col-sm-12 col-md-10 col-lg-10 mt-3">
                    <h1 class="text-center">Camilo Roa</h1>
                    <div class="col-sm-12 d-md-none text-center">
                        <img src="img/Work/camilo.jpg" alt="Camilo Roa" class="img-fluid profile mt-4 mx-auto d-block">
                    </div>
                    <div class="mt-2 contact d-md-none">
                        <div class="col-xs-12 col-sm-12 d-block pb-1">
                            <a href="https://colombia.travel/es/bogota" target="_blank"><i
                                    class="bi bi-house-door"></i></a>Bogotá D.C.
                        </div>
                        <div class="col-xs-12 col-sm-12 d-block pb-1">
                            <a href="https://wa.me/573014725061" target="_blank"><i class="bi bi-whatsapp"></i></a>(+57)
                            301-472-5061
                        </div>
                        <div class="col-xs-12 col-sm-12 d-block text-center">
                            <a href="mailto:camiloroa112@gmail.com" target="_blank"><i
                                    class="bi bi-envelope"></i></a>camiloroa112@gmail.com
                            <h4 class="text-center pt-4">Business Intelligence | Desarrollador Full-Stack & Data
                                Scientist en Formación</h4>
                        </div>
                    </div>
                    <div class="mt-2 contact d-none d-md-block text-center">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-inline-block text-center whatsapp">
                            <a href="https://wa.me/573014725061" target="_blank"><i class="bi bi-whatsapp"></i></a>(+57)
                            301-472-5061
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-inline-block text-center email">
                            <a href="mailto:camiloroa112@gmail.com" target="_blank"><i
                                    class="bi bi-envelope"></i></a>camiloroa112@gmail.com
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 d-inline-block text-center city">
                            <a href="https://colombia.travel/es/bogota" target="_blank"><i
                                    class="bi bi-house-door"></i></a>Bogotá D.C.
                        </div>
                        <h4 class="text-center pt-4">Business Intelligence | Full-Stack Developer & Data Scientist
                            in Formation</h4>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 d-none d-md-block text-center">
                    <img src="img/Work/camilo.jpg" alt="Camilo Roa" class="img-fluid profile mt-4 mx-auto d-block">
                </div>
            </div>
        </div>
    </section>
    <section id="profile-abilities">
        <div class="container py-4">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 languages pt-3 pb-3 bg-secondary shadow">
                    <h2 class="pt-2">Profesional Profile</h2>
                    <p class="pt-2">I hold a degree in Industrial Engineering from Universidad Militar Nueva Granada. My expertise lies in process automation using tools like Python and Snowflake. I specialize in crafting Tableau dashboards to visualize insights on perspectives, interests, popular locales, and demographic information of high-value audiences. Presently, I am undergoing training in Full Stack and Artificial Intelligence to develop cutting-edge technologies for organizational advancement.</p>
                    <h2>Education</h2>
                    <div class="education col-12">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 d-inline-block align-middle text-center">
                            <img src="img/Education/logo-depcsuite.svg" class="img-fluid p-3">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-inline-block align-middle education-desc">
                            <h4 class="pt-2 text-wrap">Full-Stack Developer</h4>
                            <h5>DePC Suite</h5>
                            <h5>2024 - In Progress</h5>
                            <p class="text-wrap">https://depcsuite.com</p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 d-inline-block align-middle text-center">
                            <img src="img/Education/ucataluna.png" class="img-fluid p-4 rounded-circle">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-inline-block align-middle education-desc">
                            <h4 class="pt-2 text-wrap">Big Data - Data Science Diploma</h4>
                            <h5>UniCataluña</h5>
                            <h5>2023 - 2023</h5>
                            <p class="text-wrap">https://www.ucatalunya.edu.co/</p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 d-inline-block align-middle text-center">
                            <img src="img/Education/UMNG.png" class="img-fluid p-3">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-inline-block align-middle education-desc">
                            <h4 class="pt-2">Industrial Engineering</h4>
                            <h5>Universidad Militar Nueva Granada</h5>
                            <h5>2013 - 2020</h5>
                            <p class="text-wrap">https://www.umng.edu.co/</p>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 d-inline-block align-middle text-center">
                            <img src="img/Education/colegio-colombo-gales.png" class="img-fluid">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 d-inline-block align-middle education-desc">
                            <h4 class="pt-2">Academic Baccalaureate</h4>
                            <h5>Colombo Gales School</h5>
                            <h5>2008 - 2013</h5>
                            <p class="text-wrap">https://colegiocolombogales.edu.co/</p>
                        </div>
                    </div>
                    <h2 class="pt-3">Languages</h2>
                    <ul class="pt-2">
                        <li class="pb-2">
                            <b>Spanish: </b>Native.
                        </li>
                        <li class="pb-2">
                            <b>English: </b>Advanced (B2).
                        </li>
                        <li>
                            <b>French: </b>Beginner (A1).
                        </li>
                    </ul>
                    <h2 class="pt-3">Software</h2>
                    <div class="pt-2 pb-2 software text-center">
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/python/python-icon.svg" alt="Python"
                                class="img-fluid">
                            <h6 class="text-center pt-1">Python</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/snowflake/snowflake-icon.svg" alt="Snowflake"
                                class="img-fluid">
                            <h6 class="text-center pt-1">Snowflake</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/visualstudio_code/visualstudio_code-icon.svg"
                                alt="VS Code" class="img-fluid">
                            <h6 class="text-center pt-1">VS Code</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="img/Skills/microsoft-sql-server.svg" alt="Microsoft SQL Server" class="img-fluid">
                            <h6 class="text-center pt-1">SQL Server</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/microsoft_powerbi/microsoft_powerbi-icon.svg"
                                alt="Power BI" class="img-fluid">
                            <h6 class="text-center pt-1">Power BI</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="img/Skills/tableau.svg" alt="Tableau" class="img-fluid">
                            <h6 class="text-center pt-1">Tableau</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="img/Skills/excel.svg" alt="Excel" class="img-fluid">
                            <h6 class="text-center pt-1">Excel</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/lucidchart/lucidchart-icon.svg" alt="Lucidchart"
                                class="img-fluid">
                            <h6 class="text-center pt-1">Lucidchart</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="Git"
                                class="img-fluid">
                            <h6 class="text-center pt-1">Git</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/linux/linux-icon.svg" alt="Linux"
                                class="img-fluid">
                            <h6 class="text-center pt-1">Linux</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/w3_html5/w3_html5-icon.svg" alt="HTML5"
                                class="img-fluid">
                            <h6 class="text-center pt-1">HTML5</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/w3_css/w3_css-icon.svg" alt="CSS3"
                                class="img-fluid">
                            <h6 class="text-center pt-1">CSS3</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/javascript/javascript-icon.svg" alt="JavaScript"
                                class="img-fluid">
                            <h6 class="text-center pt-1">JavaScript</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/php/php-vertical.svg" alt="PHP"
                                class="img-fluid">
                            <h6 class="text-center pt-1">PHP</h6>
                        </div>
                        <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2 d-inline-block text-center">
                            <img src="https://www.vectorlogo.zone/logos/microsoft_vb/microsoft_vb-icon.svg" alt="VBA"
                                class="img-fluid">
                            <h6 class="text-center pt-1">VBA</h6>
                        </div>
                    </div>
                    <h2 class="pt-2">Hobbies</h2>
                    <div class="col-sm-12 hobbies text-center">
                        <div class="col-sm-2 d-inline-block text-center">
                            <img src="img/Hobbies/futbol.png" alt="Fútbol" class="img-fluid">
                        </div>
                        <div class="col-sm-2 d-inline-block text-center">
                            <img src="img/Hobbies/mando.png" alt="Videojuegos" class="img-fluid">
                        </div>
                        <div class="col-sm-2 d-inline-block text-center">
                            <img src="img/Hobbies/programacion.png" alt="Programación" class="img-fluid">
                        </div>
                        <div class="col-sm-2 d-inline-block text-center">
                            <img src="img/Hobbies/youtube.png" alt="YouTube" class="img-fluid">
                        </div>
                        <div class="col-sm-2 d-inline-block text-center">
                            <img src="img/Hobbies/reproductor-de-musica.png" alt="Musica" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8 pt-3 pb-3 professional-background bg-black shadow">
                    <h2 class="pt-2">Profesional Background</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 p-4 my-auto mx-auto text-center align-middle">
                            <img src="https://asset.brandfetch.io/idkiy7QsAj/idCjy6-RN-.svg" alt="Kinesso"
                                class="img-fluid">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 d-block">
                            <h3 class="pt-2">SR Analyst BI Social Media</h3>
                            <h5>April 2022 - Currently</h5>
                            <h4>Project - AMP Exporter</h4>
                            <ul>
                                <li>
                                    Development of a Python script that automates the creation of tables in Snowflake based on user-input instructions stored in a dictionary within Jupyter. It exports information gathered from query executions into an Excel file and logs the SQL code used in the process into specific folders.
                                </li>
                                <li>
                                    The script includes a functionality to upload the created tables in Snowflake to the Kinesso console using the Selenium library, along with additional features such as sending structured email notifications, consolidating Excel-SQL files into one, and downloading audiences from the aforementioned platform.
                                </li>
                                <li>
                                    Best practices were employed throughout the code, including the use of docstrings for function documentation, adherence to PEP8 coding style, implementation of unit tests to identify potential errors, and automation of tests prior to repository updates on GitHub. Finally, version control of the code was ensured through Git commands.
                                </li>
                            </ul>
                            <h4>Project - HVA Dashboard</h4>
                            <ul>
                                <li>
                                    Development of a Tableau Dashboard designed to derive high-value insights from demographic information, perspectives, opinions, visited locations, and TV programs viewed by an audience. These insights are visually, numerically, and succinctly represented.
                                </li>
                                <li>
                                    In-depth understanding of the SQL queries used to obtain profilers, integrating them into a Python script to automate execution and redefine result structure into an Excel file for subsequent loading into the Dashboard.
                                </li>
                                <li>
                                    Quality analysis of the Dashboard conducted by replicating it into dynamic tables in Excel, ensuring accurate graphical and numerical representation of information.
                                </li>
                            </ul>
                            <h4>Project - Champions Workplan: Process Standardization & Documentation</h4>
                            <ul>
                                <li>
                                    Development of a work plan aimed at updating, managing, and documenting commonly executed processes within the department. Utilization of process flow diagrams using tools such as Lucidchart (Progress: 80%).
                                </li>
                                <li>
                                    Designing the structure for the documentation of new processes.
                                </li>
                            </ul>
                            <h4>Activities - Audiences</h4>
                            <ul>
                                <li>
                                    Designing high-value audiences through the use of tools such as Snowflake, Math Engine, and Python machine learning algorithms.
                                </li>
                                <li>
                                    Usage of tools like CM360 and SA360 for data extraction on campaign measurement.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 p-4 my-auto mx-auto text-center align-middle">
                            <img src="img/Work/nokia.svg" alt="Nokia" class="img-fluid">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 d-block">
                            <h3 class="pt-3">Business Intelligence Analyst Jr.</h3>
                            <h5>January 2022 - March 2022</h5>
                            <ul>
                                <li>
                                    Development of a Python script that consolidates various Excel files from a folder, performing additional cleanup tasks such as removing duplicate records, setting headers based on a condition, and converting different files from ".xlsx" to ".csv" using libraries like OS and Pandas.
                                </li>
                                <li>
                                    Development of a Python script to automate the completion of the ARL report online with Selenium.
                                </li>
                                <li>
                                    Creation of a PowerApps application to provide profiling information extracted through Outlook, aimed at monitoring employee training time and costs.
                                </li>
                                <li>
                                    Generation of reports using tools like PowerQuery and Power BI for data debugging, cleansing, and graphical visualization, tailored to meet client needs.
                                </li>
                                <li>
                                    Implementation of manual procedures and process flow diagrams to enhance understanding of the activities involved in a specific task.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 p-4 my-auto mx-auto text-center align-middle">
                            <img src="img/Work/ibm.svg" alt="IBM" class="img-fluid">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 d-block">
                            <h3 class="pt-3">Fin & Admin Business Associate</h3>
                            <h5>September 2020 - September 2021</h5>
                            <ul>
                                <li>
                                    Documentation, updating, and standardization of procedures related to back-office activities, accompanied by their respective diagrams created using tools such as Blueworks.
                                </li>
                                <li>
                                    Utilization of tools like Siebel and CRM for managing requests originating from the customer service department.
                                </li>
                                <li>
                                    Creation of a Python script capable of modifying the dates of various XML-format files.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 p-4 my-auto mx-auto text-center align-middle">
                            <img src="img/Work/schlumberger.svg" alt="Schlumberger" class="img-fluid">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 d-block">
                            <h3 class="pt-3">Financial Analyst - Internship</h3>
                            <h5>January 2019 - January 2020</h5>
                            <ul>
                                <li>
                                    Development of the degree project focused on standardizing, documenting, and systematizing processes with the aim of enhancing operational efficiency. The project focuses on contextualizing tasks within the finance department and representing them through business flow diagrams, delineating areas involved and the sequence of activities in each payment processing.
                                </li>
                                <li>
                                    Through the project implementation, innovation in tasks was pursued by comparing current methods with alternative ones. The documentation of activities was presented through procedure manuals, along with process redesign and implementation. This was crucial as bank reconciliations were primarily affected by a lack of understanding of the sequence of activities involved in payment processing.
                                </li>
                                <li>
                                    Monitoring bank reconciliations aimed to reduce pending transactional items from previous months and explore alternative methods for more timely accounting of operational and non-operational expenses.
                                </li>
                                <li>
                                    Reviewing documentation of inventoried material to compile reports on equipment awaiting payment.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 p-4 my-auto mx-auto text-center align-middle">
                            <img src="img/Work/scotiabank.svg" alt="Scotiabank" class="img-fluid">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 d-block">
                            <h3 class="pt-3">Financial Advisor - Customer Service</h3>
                            <h5>August 2016 - December 2018</h5>
                            <ul>
                                <li>
                                    Providing assistance to clients in Canada regarding to inquiries related to their savings accounts, checking accounts, credit cards, and lines of credit. Resolving any concerns while maintaining a professional image, primarily focused on their satisfaction. Delivering high-quality service and offering additional alternatives
                                </li>
                            </ul>
                        </div">
                    </div>
                </div>
            </div>
        </div>
    </section>
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