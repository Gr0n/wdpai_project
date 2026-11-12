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
        $searchTerm = isset($_GET['q']) && is_string($_GET['q'])
            ? trim($_GET['q'])
            : '';
        $selectedCategory = isset($_GET['category']) && is_string($_GET['category'])
            ? trim($_GET['category'])
            : '';
        $songs = array_values(array_filter(
            self::SONGS,
            static fn (array $song): bool =>
                ($searchTerm === ''
                    || stripos($song['title'], $searchTerm) !== false
                    || stripos($song['artist'], $searchTerm) !== false)
                && ($selectedCategory === '' || $song['category'] === $selectedCategory),
        ));

        $this->render('songs', [
            'pageTitle' => 'Utwory',
            'songs' => $songs,
            'searchTerm' => $searchTerm,
            'selectedCategory' => $selectedCategory,
            'categories' => array_values(array_unique(array_column(self::SONGS, 'category'))),
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
        $this->render('404', [
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
