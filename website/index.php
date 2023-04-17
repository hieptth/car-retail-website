<?php
    include('header.php');

    $page_list = array('index','home','product','login','register');
    $page = 'home';
    
    echo "<div id='masterbody'>";
    if (isset($_GET['page'])) { $page = $_GET['page']; }
    if (!in_array($page, $page_list)) { die('Page not found.'); }
    else { include($page . '.php'); }
    echo "</div>";

    include('footer.php');
?>