<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> — MidiWarrior</title>
    <script>
        (function () {
            const storageKey = 'theme';
            let savedTheme = null;

            try {
                savedTheme = localStorage.getItem(storageKey);
            } catch (error) {
                savedTheme = null;
            }

            const hasSavedTheme = savedTheme === 'light' || savedTheme === 'dark';
            const systemPrefersDark = window.matchMedia(
                '(prefers-color-scheme: dark)'
            ).matches;

            document.documentElement.dataset.theme = hasSavedTheme
                ? savedTheme
                : (systemPrefersDark ? 'dark' : 'light');
        })();
    </script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <a href="/">MIDIWarrior</a>
        <nav aria-label="Nawigacja główna">
            <ul>
                <li><a href="/">Strona główna</a></li>
                <li><a href="/songs">Utwory</a></li>
                <li><a href="/upload">Dodaj utwór</a></li>
                <li><a href="/profile">Profil</a></li>
                <li><a href="/login">Logowanie</a></li>
                <li><a href="/admin">Administracja</a></li>
                <li>
                    <button
                        class="theme-toggle"
                        type="button"
                        aria-label="Włącz ciemny motyw"
                        aria-pressed="false"
                        title="Zmień motyw"
                    >
                        <i aria-hidden="true"></i>
                        
                    </button>
                    
                </li>
            </ul>
        </nav>
    </header>
        <?= $content ?>
    <script src="/js/theme.js" defer></script>
