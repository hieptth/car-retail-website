<?php

session_start();

header("Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure");

require('view\header.php');

$view_page_list = array('index', 'home', 'product', 'login', 'register', 'logout', 'dashboard');

$process_page_list = array('login_processing', 'signUp_processing');

$page = 'home';

echo "<div id='masterbody'>";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_POST['login'])) {
    $page = $_POST['login'];
}

if (isset($_POST['signUp'])) {
    $page = $_POST['signUp'];
}

if (!in_array($page, $view_page_list) && !in_array($page, $process_page_list)) {
    die('Page not found.');
} else {
    if ($page == 'login' && !isset($_SESSION["userId"])) {
        include __DIR__ . '\verify.php';
    } elseif (in_array($page, $process_page_list)) {
        include __DIR__ . '\\' . $page . '.php';
    } else include __DIR__ . '\view\\' . $page . '.php';
}
echo "</div>";

include('view\footer.php');
