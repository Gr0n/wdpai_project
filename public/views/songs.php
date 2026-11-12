<main>
    <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
    <form action="/songs" method="get">
        <div>
            <label for="search">Szukaj utworu lub autora</label>
            <input id="search" name="q" type="search" value="<?= htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div>
            <label for="category">Kategoria</label>
            <select id="category" name="category">
                <option value="">Wszystkie kategorie</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>"<?= $selectedCategory === $category ? ' selected' : '' ?>>
                        <?= htmlspecialchars(ucfirst($category), ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit">Filtruj</button>
    </form>
    <?php if ($songs === []): ?>
        <p>Nie znaleziono utworów spełniających kryteria.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($songs as $song): ?>
                <li>
                    <article>
                        <h2><a href="/song/<?= (int) $song['id'] ?>"><?= htmlspecialchars($song['title'], ENT_QUOTES, 'UTF-8') ?></a></h2>
                        <p>Autor: <?= htmlspecialchars($song['artist'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p>Kategoria: <?= htmlspecialchars($song['category'], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</main>
