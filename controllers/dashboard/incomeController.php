<?php

    // Appel des configurations
    require_once(__DIR__.'/../../config/config.php');
    require_once(__DIR__.'/../../config/regex.php');

    // Appel des fonctions
    require_once(__DIR__.'/../../helpers/functions.php');

    // Variables
    $style = '<link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="/../../public/css/dashboard/leftbar.css">
    <link rel="stylesheet" href="/../../public/css/dashboard/income.css">
    <link rel="stylesheet" href="/../../public/css/dashboard/rightbar.css">';

    $javascript = '<script defer src="../public/js/openNavbar.js"></script>
    <script defer src="../public/js/chartGraph.js"></script>';
    
    $title = TITLE_HEAD[13];
    $description = DESCRIPTION_HEAD[7];

    // Appel des vues
    include (__DIR__.'/../../views/templates/header.php');
    include (__DIR__.'/../../views/admin/leftbar.php');
    include (__DIR__.'/../../views/admin/income.php');
    include (__DIR__.'/../../views/admin/rightbar.php');
    include (__DIR__.'/../../views/templates/footer.php');
