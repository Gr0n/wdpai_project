<?php require __DIR__ . '/layout/header.php'; ?>
<main>
    <h1>400 — Nieprawidłowe żądanie</h1>
    <p><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></p>
    <a href="/songs">Wróć do listy utworów</a>
</main>
<?php require __DIR__ . '/layout/footer.php'; ?>
