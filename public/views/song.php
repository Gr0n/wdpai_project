<main>
    <article>
        <h1><?= htmlspecialchars($song['title'], ENT_QUOTES, 'UTF-8') ?></h1>
        <dl>
            <dt>Autor</dt>
            <dd><?= htmlspecialchars($song['artist'], ENT_QUOTES, 'UTF-8') ?></dd>
            <dt>Kategoria</dt>
            <dd><?= htmlspecialchars($song['category'], ENT_QUOTES, 'UTF-8') ?></dd>
        </dl>
        <section aria-labelledby="player-heading">
            <h2 id="player-heading">Odtwarzacz</h2>
            <canvas
                id="song-visualizer"
                width="960"
                height="320"
                role="img"
                aria-label="Wizualizacja opadających nut dla utworu <?= htmlspecialchars($song['title'], ENT_QUOTES, 'UTF-8') ?>"
            >
                Wizualizacja nut wymaga obsługi elementu canvas.
            </canvas>
            <div>
                <button type="button">Start</button>
                <button type="button">Pause</button>
                <button type="button">Restart</button>
            </div>
            <div>
                <label for="tempo">Tempo</label>
                <input id="tempo" name="tempo" type="range" min="40" max="240" value="120">
            </div>
            <p aria-live="polite">Odtwarzacz gotowy.</p>
        </section>
        <section aria-labelledby="description-heading">
            <h2 id="description-heading">Opis utworu</h2>
            <p><?= htmlspecialchars($song['title'], ENT_QUOTES, 'UTF-8') ?> — utwór z kategorii <?= htmlspecialchars($song['category'], ENT_QUOTES, 'UTF-8') ?>.</p>
        </section>
        <section aria-labelledby="comments-heading">
            <h2 id="comments-heading">Komentarze</h2>
            <form method="post">
                <label for="comment">Dodaj komentarz</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
                <button type="submit">Wyślij komentarz</button>
            </form>
        </section>
    </article>
</main>
