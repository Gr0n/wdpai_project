<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/src/controllers/DefaultController.php';
require_once dirname(__DIR__) . '/src/controllers/ProjectController.php';
require_once dirname(__DIR__) . '/src/controllers/SongController.php';
require_once dirname(__DIR__) . '/Routing.php';

$routing = new Routing();

// TU BĘDZIEMY DEFINIOWAĆ WSZYSTKIE TRASY WYSTĘPUJĄCE W NASZYM PROJEKCIE
$routing->get('/projects', ProjectController::class, 'index');
$routing->get('/projects/{id}', ProjectController::class, 'show');
$routing->get('/songs', SongController::class, 'index');
$routing->get('/song/{id}', SongController::class, 'show');
$routing->get('/', DefaultController::class, 'index');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';
    if (
        $_SERVER['REQUEST_METHOD'] === 'GET'
        && preg_match('~^/song/([^/]+)$~', $path, $matches) === 1
        && !ctype_digit($matches[1])
    ) {
        (new SongController())->badRequest();
        return;
    }

    http_response_code(404);
    (new DefaultController())->notFound();
}