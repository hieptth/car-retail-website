<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/car-dealer-logo-vector.png" />
        <title>Car Dealer</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='view/css/main.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='view/css/login.css'>
    </head>


    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark py-1 px-2">

            <div class="container-fluid">

                <div class="navbar-brand col-lg-auto justify-content-center me-auto mb-2 mb-lg-0">
                    <img src="/assets/img/car-dealer-logo.png" alt="Car Dealer Logo" width="200px" height="60px"
                        class="d-inline-block align-text-top">
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse col order-lg-first justify-content-start">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text" aria-current="page"
                                href="http://localhost/index.php?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text" aria-current="page"
                                href="http://localhost/index.php?page=product">Shop</a>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse col order-lg-last justify-content-end">
                    <ul class="navbar-nav me-10 mb-2 mb-lg-0">

                        <?php if (isset($_SESSION["userId"])) { ?>
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page"
                                    href="http://localhost/index.php?page=dashboard">Welcome, <?php echo $_SESSION["Display_name"] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page"
                                    href="http://localhost/index.php?page=logout">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page"
                                    href="http://localhost/index.php?page=login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text" aria-current="page"
                                    href="http://localhost/index.php?page=register">Register</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>

        </nav>


        <script>
            const navEl = document.querySelector('.navbar');

            window.addEventListener('scroll', () => {
                if (window.scrollY >= 60) {
                    navEl.classList.add('navbar-scrolled');
                }
                else if (window.scrollY <= 60) {
                    navEl.classList.remove('navbar-scrolled');
                }
            });
        </script>

    </body>
</html>