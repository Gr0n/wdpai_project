<?php

declare(strict_types=1);

require_once __DIR__ . '/AppController.php';


final class DefaultController extends AppController
{
    public function index(): void
    {
        $this->render('home', [
            'pageTitle' => 'MidiWarrior',
            'intro' => 'Odkrywaj muzykę.',
            'platformDescription' => 'MidiWarrior to interaktywny odtwarzacz nut.',
        ]);
    }

    public function notFound(): void
    {
        $this->render('not-found', [
            'pageTitle' => 'Nie znaleziono strony',
        ]);
    }
}