<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>400 — <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <main>
        <h1>400 — Nieprawidłowe żądanie</h1>
        <p>Identyfikator utworu musi być dodatnią liczbą całkowitą.</p>
        <a href="/songs">Wróć do listy utworów</a>
    </main>
</body>
</html>
