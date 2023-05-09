<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Dealer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/car-dealer-logo-vector.png" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Boxicon link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Remixicon link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Google Fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS link -->
    <link rel='stylesheet' type='text/css' media='screen' href='view/css/main.css'>

</head>


<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark py-1 px-2">

        <div class="container-fluid">

            <div class="navbar-brand col-lg-auto me-25 mb-2 mb-lg-0">
                <img src="/assets/img/car-dealer-logo.png" alt="Car Dealer Logo" width="200px" height="60px" class="d-inline-block align-text-top">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse col justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-0 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="http://localhost/index.php?page=home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="http://localhost/index.php?page=product">Shop</a>
                    </li>
                </ul>

                <ul class="navbar-nav me-0 mb-2 mb-lg-0">
                    <?php if (isset($_SESSION["userId"])) { ?>
                        <li class="nav-item">
                            <a class="nav-link nav-text" aria-current="page" href="http://localhost/index.php?page=dashboard"><?php echo $_SESSION["Display_name"] ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-text" aria-current="page" href="http://localhost/index.php?page=logout">Logout</a>
                        </li>

                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link nav-text" aria-current="page" href="http://localhost/index.php?page=login">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-text" aria-current="page" href="http://localhost/index.php?page=register">Register</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>


    <script>
        const navEl = document.querySelector('.navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 80) {
                navEl.classList.add('navbar-scrolled');
            } else if (window.scrollY <= 80) {
                navEl.classList.remove('navbar-scrolled');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>