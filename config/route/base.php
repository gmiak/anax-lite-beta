<?php
/**
 * Routes base.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("header/header", ["title" => "Home"]);
    $app->view->add("header/navbar");
    $app->view->add("contains/home");
    $app->view->add("footer/footer");

    $app->response->setBody([$app->view, "render"])
              ->send();
});

$app->router->add("about", function () use ($app) {
    $app->view->add("header/header", ["title" => "About"]);
    $app->view->add("header/navbar");
    $app->view->add("contains/about");
    $app->view->add("footer/footer");

    $app->response->setBody([$app->view, "render"])
              ->send();
});

$app->router->add("report", function () use ($app) {
    $app->view->add("header/header", ["title" => "Report"]);
    $app->view->add("header/navbar");
    $app->view->add("contains/report");
    $app->view->add("footer/footer");

    $app->response->setBody([$app->view, "render"])
              ->send();
});


$app->router->add("status", function () use ($app) {
    $data = [
        "Server" => php_uname(),
        "PHP version" => phpversion(),
        "Included files" => count(get_included_files()),
        "Memory used" => memory_get_peak_usage(true),
        "Execution time" => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
    ];
    $app->response->sendJson($data);
});
