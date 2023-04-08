<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Login</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel='stylesheet' type='text/css' media='screen' href='css\login.css'>
        <script type="text/javascript" src="js/loginValidate.js"></script>
    </head>

    <body>
        <section class="background-radial-gradient overflow-hidden">

            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            The best agent <br />
                            <span style="color: hsl(218, 81%, 75%)">for your cars collection.</span>
                        </h1>
                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Temporibus, expedita iusto veniam atque, magni tempora mollitia
                            dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                            ab ipsum nisi dolorem modi. Quos?
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <form name="loginForm" onsubmit="return validateForm()" method="post" autocomplete="on">
                                    <!-- Username input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="username" class="form-control" name="username" 
                                        minlength="3" maxlength="25" placeholder="Username" required/>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control" name="password" 
                                        minlength="8" maxlength="15" placeholder="Password" required/>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="d-flex justify-content-center mb-4">
                                        <button type="submit" class="btn btn-primary bt-lg btn-block ">SIGN IN</button>
                                    </div>

                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <p>or sign in with:</p>
                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-github"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>