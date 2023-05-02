<?php
    namespace Website;
    use \Website\Member;

    if (!empty($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        require_once (__DIR__ . "/class/Member.php");
        
        $member = new Member();
        $isLoggedIn = $member->processLogin($username, $password);
        if (!$isLoggedIn) {
            $_SESSION["errorMessage"] = "Invalid Credentials";
            require_once __DIR__ . '\view\login.php';
        }
        
        if (isset($_SESSION["userId"])) {
            header('Refresh: 0');
        }
        require_once __DIR__ . '\verify.php';
    }
?>