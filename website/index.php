<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <link rel="shortcut icon" type="image/x-icon" href="img/car-dealer-logo-vector.png" />
        <title>Home</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
        <link rel='stylesheet' type='text/css' media='screen' href='css\main.css'>
        
    </head>

    <body>
        <nav class="navbar fixed-top navbar-light navbar-expand-lg">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex d-flex-grow-1 justify-content-between collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <div class="d-flex d-flex-col d-flex-grow-1 justify-content-start">
                        <ul class="d-flex flex-grow-1 navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page" href="http://localhost/website/index.php?page=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page" href="http://localhost/website/index.php?page=product">Shop</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="d-flex d-flex-col d-flex-grow-2 justify-content-center">
                        <ul class="d-flex flex-grow-1 navbar-nav me-auto my-1 mb-lg-0">
                            <img src="img/car-dealer-logo.png" alt="" width="200px" height="60px" class="d-inline-block align-text-top">
                        </ul>
                    </div>
                    
                    <div class="d-flex d-flex-col d-flex-grow-1 justify-content-end">
                        <ul class="d-flex flex-grow-1 navbar-nav me-10 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page" href="http://localhost/website/index.php?page=login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page" href="http://localhost/website/index.php?page=register">Register</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </nav>

        <div id="masterbody">
            <header class="masthead">
                <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div class="text-center">
                            <h1 class="mx-auto my-0 text-uppercase">CAR DEALER</h1>
                            <h2 class="text-white-50 mx-auto mt-2 mb-5">You need. We have!</h2>
                        </div>
                    </div>
                </div>
            </header>

            <section class="about-section text-center" id="about">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <content class="d-flex flex-column align-items-center flex-wrap" id="switch_content">
                            <?php
                                $page_list = array('index','home','product','login','register','contact');
                                if(isset($_GET['page'])) { $page = $_GET['page']; }
                                else { $page = 'index'; }
                                if (!in_array($page, $page_list)) { die('Page not found.'); }
                                if (in_array($page, $page_list) && isset($_GET['page'])) { include($page . '.php'); }
                            ?>
                        </content>
                    </div>
                </div>
            </section>

            <div class="push"></div>
        </div>
        

        <footer class="container-fluid py-3 align--self-center footer small text-center text">
            <div>Copyright &copy; ChasuHak - Web Programming Course 2023</div>
        </footer>

        <script type="text/javascript" src="js/index.js"></script>
        <script>
            const navEl = document.querySelector('.navbar');

            window.addEventListener('scroll', () => {
                if (window.scrollY >= 320) {
                    navEl.classList.add('navbar-scrolled');
                }
                else if (window.scrollY <= 320) {
                    navEl.classList.remove('navbar-scrolled');
                }
            } );
        </script>

    </body>
</html>