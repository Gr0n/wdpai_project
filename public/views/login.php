<main>
    <h1>Logowanie i rejestracja</h1>
    <nav aria-label="Logowanie lub rejestracja">
        <a href="#login">Logowanie</a>
        <a href="#registration">Rejestracja</a>
    </nav>
    <section id="login" aria-labelledby="login-heading">
        <h2 id="login-heading">Logowanie</h2>
        <form action="/login" method="post">
            <div>
                <label for="login-email">Adres e-mail</label>
                <input id="login-email" name="email" type="email" autocomplete="email" required>
            </div>
            <div>
                <label for="login-password">Hasło</label>
                <input id="login-password" name="password" type="password" autocomplete="current-password" required>
            </div>
            <button type="submit">Zaloguj się</button>
        </form>
    </section>
    <section id="registration" aria-labelledby="registration-heading">
        <h2 id="registration-heading">Rejestracja</h2>
        <form action="/login" method="post">
            <div>
                <label for="registration-name">Nazwa użytkownika</label>
                <input id="registration-name" name="name" type="text" autocomplete="username" required>
            </div>
            <div>
                <label for="registration-email">Adres e-mail</label>
                <input id="registration-email" name="email" type="email" autocomplete="email" required>
            </div>
            <div>
                <label for="registration-password">Hasło</label>
                <input id="registration-password" name="password" type="password" autocomplete="new-password" required>
            </div>
            <button type="submit">Utwórz konto</button>
        </form>
    </section>
</main>
