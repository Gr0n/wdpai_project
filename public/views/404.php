<?php require __DIR__ . '/layout/header.php'; ?>
<main>
    <h1>404 — Nie znaleziono strony</h1>
    <p><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></p>
    <a href="/">Wróć na stronę główną</a>
</main>
<?php require __DIR__ . '/layout/footer.php'; ?>