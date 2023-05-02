<?php
    if (isset($_SESSION["userId"])) {
        require_once __DIR__ . '\view\dashboard.php';
    } else {
        include __DIR__ . '\view\login.php';
    }
?>