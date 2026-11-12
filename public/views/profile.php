<?php require __DIR__ . '/layout/header.php'; ?>
<main>
    <article>
        <h1><?= htmlspecialchars($profile['name'], ENT_QUOTES, 'UTF-8') ?></h1>
        <section aria-labelledby="profile-heading">
            <h2 id="profile-heading">Profil</h2>
            <p><?= htmlspecialchars($profile['bio'], ENT_QUOTES, 'UTF-8') ?></p>
            <p>Liczba utworów: <?= (int) $profile['songCount'] ?></p>
        </section>
        <section aria-labelledby="profile-songs-heading">
            <h2 id="profile-songs-heading">Utwory użytkownika</h2>
            <a href="/songs">Przeglądaj utwory</a>
        </section>
    </article>
</main>
<?php require __DIR__ . '/layout/footer.php'; ?>
