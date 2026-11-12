<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> — MidiWarrior</title>
</head>
<body>
    <header>
        <a href="/">MidiWarrior</a>
        <nav aria-label="Nawigacja główna">
            <a href="/">Strona główna</a>
        </nav>
    </header>
    <main>
        <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
        <ul>
            <?php foreach ($songs as $song): ?>
                <li>
                    <a href="/song/<?= (int) $song['id'] ?>">
                        <?= htmlspecialchars($song['title'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                    <span> — <?= htmlspecialchars($song['artist'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
