<?php

$username = $password = $email = $display_name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = check_input($_POST["sUsername"]);
    $password = check_input($_POST["sPassword"]);
    $email = check_input($_POST["sEmail"]);
    $display_name = check_input($_POST["sDisplayName"]);
}

function check_input($data)
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
            <h1>Sign up</h1>
            <form name="signUpForm" onsubmit="return validateForm()" method="post" action="" autocomplete="on">
                <?php if (isset($_SESSION["errorSignedUp"])) { ?>
                    <div class="error-message py-1" style="color: goldenrod;"><i>*<?php echo $_SESSION["errorSignedUp"]; ?></i></div>
                <?php unset($_SESSION["errorSignedUp"]);
                } ?>

                <!-- Username input -->
                <div class="form-outline input-group mb-4">
                    <span class="input-group-text"><i class="ri-user-fill"></i></span><input type="text" id="sUsername" class="form-control" name="sUsername" minlength="3" maxlength="25" title="Contain at least 3 characters with one uppercase, one lowercase, and a number." placeholder=" Username" required />
                </div>

                <div class="my-1" id="uError"></div>

                <!-- Password input -->
                <div class="form-outline input-group mb-4">
                    <span class="input-group-text"><i class="ri-key-fill"></i></span><input type="password" id="sPassword" class="form-control" name="sPassword" minlength="8" maxlength="50" title="Contain at least 8 characters with one uppercase, one lowercase, a number and a special character." placeholder="Password" required />
                </div>

                <!-- Display name -->
                <div class="form-outline input-group mb-4">
                    <span class="input-group-text"><i class="ri-user-settings-fill"></i></span><input type="text" id="sDisplayName" class="form-control" name="sDisplayName" placeholder="Display name" />
                </div>

                <!-- Email -->
                <div class="form-outline input-group mb-4">
                    <span class="input-group-text"><i class="ri-mail-fill"></i></span><input type="text" id="sEmail" class="form-control" name="sEmail" placeholder="Email" />
                </div>

                <!-- Login redirect -->
                <div class="alr-member">
                    <span class="pe-1">Already a member?</span><a aria-current="page" style="color: gold;" href="http://localhost/index.php?page=login">Login</a>
                </div>

                <!-- Submit button -->
                <div class="d-flex justify-content-center mb-4">
                    <button type="submit" name="signUp" value="signUp_processing" class="btn signUp-btn bt-lg btn-block" valid>SIGN UP</button>
                </div>
            </form>
        </div>
    </section>
<?php } else {
    include __DIR__ . '\home.php';
}
?>

<script>
    function validateForm() {
        let x = document.getElementById("sUsername").value;
        let y = document.getElementById("sPassword").value;

        console.log('here');

        const u_pattern = /^[a-zA-Z0-9_]+$/;
        const y_pattern = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

        var u_check, p_check;
        u_check = p_check = false;

        if (u_pattern.test(x)) u_check = true;
        else document.getElementById('uError').innerHTML = "<p>Invalid username format!</p>";
        if (y_pattern.test(y)) p_check = true;
        else alert("Invalid password format!");

        return (u_check && p_check);
    }
</script>