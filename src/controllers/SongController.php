<?php

declare(strict_types=1);

require_once __DIR__ . '/AppController.php';

final class SongController extends AppController
{
    private const SONGS = [
        ['id' => 1, 'title' => 'Nocna melodia', 'artist' => 'MidiWarrior', 'category' => 'jazz'],
        ['id' => 2, 'title' => 'Poranny rytm', 'artist' => 'MidiWarrior', 'category' => 'electronic'],
    ];

    public function index(): void
    {
        $this->render('songs', [
            'pageTitle' => 'Utwory',
            'songs' => self::SONGS,
        ]);
    }

    public function show(int $id): void
    {
        if ($id <= 0) {
            $this->badRequest();
            return;
        }

        foreach (self::SONGS as $song) {
            if ($song['id'] === $id) {
                $this->render('song', [
                    'pageTitle' => $song['title'],
                    'song' => $song,
                ]);
                return;
            }
        }

        http_response_code(404);
        $this->render('not-found', [
            'pageTitle' => 'Nie znaleziono utworu',
        ]);
    }

    public function badRequest(): void
    {
        http_response_code(400);
        $this->render('bad-request', [
            'pageTitle' => 'Nieprawidłowy identyfikator utworu',
        ]);
    }
}
