<?php 

require __DIR__ . "/config.php";

if(!empty($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'accueil';
}

include BASE_PATH . 'includes/top.php';
require BASE_PATH . '/pages/' . $page . '.php';
include BASE_PATH . '/includes/bottom.php';