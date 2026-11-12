<main>
    <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
    <section aria-labelledby="moderation-heading">
        <h2 id="moderation-heading">Utwory oczekujące na moderację</h2>
        <?php if ($pendingSongs === []): ?>
            <p>Brak utworów do sprawdzenia.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($pendingSongs as $song): ?>
                    <li>
                        <article>
                            <h3><?= htmlspecialchars($song['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p>Autor: <?= htmlspecialchars($song['artist'], ENT_QUOTES, 'UTF-8') ?></p>
                            <button type="button">Zatwierdź</button>
                            <button type="button">Odrzuć</button>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>
</main>
