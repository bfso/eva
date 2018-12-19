<?php
//$uri = trim("$_SERVER[REQUEST_URI]", '/');
if ('matchdays' == $_GET['page']) {
    $controller = new \App\Http\Controllers\MatchdayController();
    $controller->index();
}
if ('matchday_show' == $_GET['page']) {
    $controller = new \App\Http\Controllers\MatchdayController();
    $controller->show($_GET['id']);
}