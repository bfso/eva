<?php
$uri = trim("$_SERVER[REQUEST_URI]", '/');
if ('matchdays' == $uri) {
    $controller = new \App\Http\Controllers\MatchdayController();
    $controller->index();
}