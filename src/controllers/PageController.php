<?php

declare(strict_types=1);

require_once __DIR__ . '/AppController.php';

final class PageController extends AppController
{
    public function login(): void
    {
        $this->render('login', [
            'pageTitle' => 'Logowanie i rejestracja',
        ]);
    }

    public function upload(): void
    {
        $this->render('upload', [
            'pageTitle' => 'Dodaj utwór',
        ]);
    }

    public function profile(): void
    {
        $this->render('profile', [
            'pageTitle' => 'Profil użytkownika',
            'profile' => [
                'name' => 'MelodyMaker',
                'bio' => 'Tworzę i odkrywam muzykę MIDI.',
                'songCount' => 2,
            ],
        ]);
    }

    public function admin(): void
    {
        $this->render('admin', [
            'pageTitle' => 'Panel administracyjny',
            'pendingSongs' => [
                ['title' => 'Nowa kompozycja', 'artist' => 'MelodyMaker'],
            ],
        ]);
    }
}
