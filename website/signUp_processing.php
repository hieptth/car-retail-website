<?php

namespace Website;

use \Website\Member;

if (!empty($_POST["signUp"])) {
    $username = $_POST["sUsername"];
    $password = $_POST["sPassword"];
    $display_name = $_POST["sDisplayName"];
    $email = empty($_POST["sEmail"]) ? '...' : $_POST["sEmail"];
    require_once(__DIR__ . "/class/Member.php");

    $member = new Member();
    $isSignedUp = $member->processSignUp($username, $password, $display_name, $email);
    if ($isSignedUp) {
        $_SESSION["errorSignedUp"] = "You have been registered";
    }

    include __DIR__ . '\view\register.php';

    exit();
}
