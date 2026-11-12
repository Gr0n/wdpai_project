## Cel projektu
MIDIWarrior: aplikacja w PHP 8.3 (obiektowo, MVC), w której użytkownicy wrzucają własne utwory MIDI i odtwarzają je w odtwarzaczu ze spadającymi nutami. Projekt zaliczeniowy: ma być prosty, uruchamialny i łatwy do wyjaśnienia na demo.

## Struktura
- `docker-compose.yaml` — usługi Docker Compose (db, nginx, php).
- `docker/` — Dockerfile i konfiguracja: `db/`, `nginx/` (`nginx.conf`), `php/`.
- `public/index.php` — front controller i rejestracja tras.
- `public/css/style.css` — wspólne style (zmienne CSS, motyw jasny/ciemny).
- `public/views/` — widoki HTML z fragmentami PHP: `home`, `login`, `songs`, `song`, `upload`, `profile`, `admin`, `404`, `bad-request`.
- `public/views/layout/` — wspólne `header.php` i `footer.php`.
- `src/Routing.php` — dopasowanie tras i uruchamianie kontrolerów.
- `src/controllers/` — kontrolery w namespace `App\Controller`:
  - `AppController` — wspólna baza, metoda `render()`.
  - `DefaultController` — strona główna i 404.
  - `SongController` — lista utworów i szczegóły.
  - `PageController` — logowanie, upload, profil, admin.

## Zasady pracy
- Zachowuj `declare(strict_types=1)` w plikach PHP i typuj parametry oraz wartości zwracane.
- Każdy kontroler dziedziczy po `AppController`. Kontroler przygotowuje dane, widok tylko je wyświetla.
- Kontroler nie zawiera SQL ani logiki biznesowej. Zapytania trafią do repozytoriów, reguły do serwisów (gdy dojdzie baza).
- Dane w HTML zabezpieczaj przez `htmlspecialchars()`.
- Nie duplikuj HTML: używaj `layout/header.php` i `layout/footer.php`.
- Style tylko w `public/css/`, na zmiennych CSS, bez `style=""` w HTML.
- HTML semantyczny, każde pole formularza ma `<label>`, aktywne elementy oznaczaj `aria-current` / `aria-pressed`.
- Nie dodawaj frameworków ani zależności bez zgody.
- Wprowadzaj małe zmiany i nie modyfikuj plików niezwiązanych z zadaniem.

## Routing
- Nieprawidłowe id (nie liczba, `<= 0`) kończy się widokiem `bad-request` i kodem 400.
- Nieistniejący zasób lub nieznany adres daje prawdziwy kod 404 i widok `404.php`.
- Przy nowej trasie dodaj metodę w kontrolerze, widok i rejestrację w `public/index.php`.

## Uruchamianie i weryfikacja
- Start: `docker compose up --build -d` (aplikacja na `http://localhost:8080`).
- Składnia: `docker compose exec -T php php -l ścieżka/do/pliku.php`
- Po zmianie trasy sprawdź poprawny adres oraz odpowiedź 404 (kod w zakładce Network, nie tylko treść).
- Przed zakończeniem pokaż `git diff` i podsumuj zmienione pliki.

## Git
- Małe, logiczne commity z czytelnym komunikatem, np. `feat: Add song view template`.
- Po każdym kroku zaproponuj komunikat commita.

## Bezpieczeństwo
- Nie odczytuj ani nie commituj sekretów z `.env`. Utrzymuj `.env.example` z samymi nazwami zmiennych.
- Nie wykonuj destrukcyjnych poleceń bez potwierdzenia.
- Nie zmieniaj wygenerowanych plików w `vendor/`.
- Uprawnienia (rola, właściciel utworu) sprawdzaj po stronie serwera, nie tylko w widoku.
- Pliki od użytkownika (MIDI, obrazy): sprawdzaj rozmiar, rozszerzenie i rzeczywisty typ MIME, nadawaj losową nazwę, w bazie trzymaj tylko ścieżkę.
- Do projektu nie wrzucaj chronionych prawami autorskimi plików MIDI.