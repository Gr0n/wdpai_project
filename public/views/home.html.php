<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <header>
        <a href="/" aria-label="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> — strona główna">
            <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>
        </a>
        <nav aria-label="Nawigacja główna">
            <ul>
                <li><a href="/">Strona główna</a></li>
                <li><a href="/projects">Utwory</a></li>
                <li><a href="#jak-to-dziala">Jak to działa</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section aria-labelledby="welcome-heading">
            <p>Muzyka MIDI..</p>
            <h1 id="welcome-heading">Zobacz muzykę.</h1>
            <p><?= htmlspecialchars($intro, ENT_QUOTES, 'UTF-8') ?></p>
            <p>
                <a href="/projects">Odkrywaj utwory</a>
                <a href="#jak-to-dziala">Poznaj MidiWarrior</a>
            </p>
        </section>
        <section id="jak-to-dziala" aria-labelledby="about-heading">
            <h2 id="about-heading">odtwarzacz MIDI</h2>
            <p><?= htmlspecialchars($platformDescription, ENT_QUOTES, 'UTF-8') ?></p>
            <article>
                <h3>Obserwuj każdą nutę</h3>
                <p>Wizualizacja opadających nut pomoże śledzić melodię podczas odtwarzania.</p>
            </article>
            <article>
                <h3>Odkrywaj muzykę społeczności</h3>
                <p>Znajduj utwory MIDI i poznawaj twórców w jednym miejscu.</p>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>. Muzyka w ruchu.</p>
    </footer>
</body>
</html>
