<?php

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
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
    <section class="container-fluid px-0">
        <div class="card bg-glass login-form">
            <h1>Login</h1>
            <form name="loginForm" onsubmit="return validateForm()" method="post" action="" autocomplete="on">
                <?php if (isset($_SESSION["errorMessage"])) { ?>
                    <div class="error-message py-1" style="color: goldenrod;"><i>*<?php echo $_SESSION["errorMessage"]; ?></i></div>
                <?php unset($_SESSION["errorMessage"]);
                } ?>

                <!-- Username input -->
                <div class="form-outline input-group mb-4">
                    <!-- <label for="username"><span class="login-label">Username</span></label> -->
                    <span class="input-group-text"><i class="ri-user-fill"></i></span><input type="text" id="username" class="form-control" name="username" minlength="3" maxlength="25" title="Contain at least 3 characters with one uppercase, one lowercase, and a number." placeholder=" Username" required />
                </div>

                <!-- Password input -->
                <div class="form-outline input-group mb-4">
                    <!-- <label for="password"><span class="login-label">Password</span></label> -->
                    <span class="input-group-text"><i class="ri-key-fill"></i></span><input type="password" id="password" class="form-control" name="password" minlength="8" maxlength="50" title="Contain at least 8 characters with one uppercase, one lowercase, a number and a special character." placeholder="Password" required />
                </div>
                <!-- <div id="message" style="margin: -1rem 0 1rem 0;">
                    <em style="font-size: 70%;">
                        Must contain at least 8 characters with one uppercase, one lowercase, a number
                        and a special character.
                    </em>
                </div> -->

                <div class="forgot"><a href="#">Forgot password?</a></div>


                <!-- Checkbox -->
                <div class="form-outline align-items-center mb-4">
                    <input type="checkbox" id="remember" name="remember" value="Remember" />
                    <label for="remember"><span class="checkbox-text">Keep me signed in</span></label>
                </div>

                <!-- Submit button -->
                <div class="d-flex justify-content-center mb-4">
                    <button type="submit" name="login" value="login_processing" class="btn btn-primary bt-lg btn-block" valid>SIGN IN</button>
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                    <p style="color: white;">or sign in with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1" style="margin-top: -1rem;">
                        <i class="fa fa-facebook"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1" style="margin-top: -1rem;">
                        <i class="fa fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1" style="margin-top: -1rem;">
                        <i class="fa fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1" style="margin-top: -1rem;">
                        <i class="fa fa-github"></i>
                    </button>
                </div>
            </form>
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