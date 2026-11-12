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
            <a href="/songs">Wszystkie utwory</a>
        </nav>
    </header>
    <main>
        <article>
            <h1><?= htmlspecialchars($song['title'], ENT_QUOTES, 'UTF-8') ?></h1>
            <dl>
                <dt>Autor</dt>
                <dd><?= htmlspecialchars($song['artist'], ENT_QUOTES, 'UTF-8') ?></dd>
                <dt>Kategoria</dt>
                <dd><?= htmlspecialchars($song['category'], ENT_QUOTES, 'UTF-8') ?></dd>
            </dl>
        </article>
    </main>
</body>
</html>
