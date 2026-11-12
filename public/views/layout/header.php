<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> — MidiWarrior</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <a href="/">MidiWarrior</a>
        <nav aria-label="Nawigacja główna">
            <ul>
                <li><a href="/">Strona główna</a></li>
                <li><a href="/songs">Utwory</a></li>
                <li><a href="/upload">Dodaj utwór</a></li>
                <li><a href="/profile">Profil</a></li>
                <li><a href="/login">Logowanie</a></li>
                <li><a href="/admin">Administracja</a></li>
            </ul>
        </nav>
    </header>
