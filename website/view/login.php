<?php

$username = $password = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $email = test_input($_POST["password"]);
    $website = test_input($_POST["email"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!isset($_SESSION["userId"])) {
?>
    <section class="container px-10 background-radial-gradient overflow-hidden">

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        The best agent <br />
                        <span style="color: hsl(218, 81%, 75%)">for your cars collection.</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Welcome to our car retail website! We are proud to offer a wide variety of vehicles
                        to suit your needs, whether you're looking for a practical family car or a sporty ride.
                        With an extensive inventory of both new and pre-owned vehicles, we are confident that
                        we can help you find the perfect car for your lifestyle and budget.
                    </P>

                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Our team of experienced professionals is dedicated to providing exceptional customer service
                        throughout your buying journey, and we invite you to explore our website and find your dream car
                        today.
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>


                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form name="loginForm" onsubmit="return validateForm()" method="post" action="" autocomplete="on">

                                <?php if (isset($_SESSION["errorMessage"])) { ?>
                                    <div class="error-message py-1" style="color: red;"><i>*<?php echo $_SESSION["errorMessage"]; ?></i></div>
                                <?php unset($_SESSION["errorMessage"]);
                                } ?>

                                <!-- Username input -->
                                <div class="form-outline mb-4">
                                    <label for="username"><span class="login-label">Username</span></label>
                                    <input type="text" id="username" class="form-control" name="username" minlength="3" maxlength="25" placeholder="i.e. DucatiMeme933" required />
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label for="password"><span class="login-label">Password</span></label>
                                    <input type="password" id="password" class="form-control" name="password" minlength="8" maxlength="50" title="Contain at least 8 characters with one uppercase, one lowercase, a number and a special character." placeholder="i.e. xS1jk@86tm" required />
                                    <div id="message">
                                        <em style="font-size: 90%">
                                            Must contain at least 8 characters with one uppercase, one lowercase, a number
                                            and a special character.
                                        </em>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label for="email"><span class="login-label">Email</span></label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="example@gmail.com" />
                                </div>

                                <!-- Submit button -->
                                <div class="d-flex justify-content-center mb-4">
                                    <button type="submit" name="login" value="login_processing" class="btn btn-primary bt-lg btn-block ">SIGN IN</button>
                                </div>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or sign in with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-facebook"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-github"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else {
    include __DIR__ . '\home.php';
}
?>

<script>
    var myInput = document.getElementById("password");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }


    function validateForm() {
        let x = document.getElementById("username").value;
        let y = document.getElementById("password").value;

        const u_pattern = /^[a-zA-Z0-9_]+$/;
        const y_pattern = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

        var u_check, p_check;
        u_check = p_check = false;

        if (u_pattern.test(x)) u_check = true;
        else alert("Invalid username format!");
        if (y_pattern.test(y)) p_check = true;
        else alert("Invalid password format!");

        return (u_check && p_check);
    }
</script>