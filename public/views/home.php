<?php require __DIR__ . '/layout/header.php'; ?>
<main>
    <section aria-labelledby="welcome-heading">
        <p>Muzyka MIDI.</p>
        <h1 id="welcome-heading">Zobacz muzykę.</h1>
        <p><?= htmlspecialchars($intro, ENT_QUOTES, 'UTF-8') ?></p>
        <p><a href="/songs">Odkrywaj utwory</a></p>
    </section>
    <section aria-labelledby="about-heading">
        <h2 id="about-heading">Odtwarzacz MIDI</h2>
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
<?php require __DIR__ . '/layout/footer.php'; ?>
