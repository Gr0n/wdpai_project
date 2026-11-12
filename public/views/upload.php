<main>
    <h1>Dodaj utwór</h1>
    <form action="/upload" method="post" enctype="multipart/form-data">
        <div>
            <label for="song-title">Tytuł utworu</label>
            <input id="song-title" name="title" type="text" required>
        </div>
        <div>
            <label for="song-description">Opis</label>
            <textarea id="song-description" name="description" rows="5"></textarea>
        </div>
        <div>
            <label for="song-category">Kategoria</label>
            <select id="song-category" name="category" required>
                <option value="">Wybierz kategorię</option>
                <option value="jazz">Jazz</option>
                <option value="classical">Klasyczna</option>
                <option value="electronic">Elektroniczna</option>
            </select>
        </div>
        <div>
            <label for="midi-file">Plik MIDI</label>
            <input id="midi-file" name="midi" type="file" accept=".mid,.midi,audio/midi" required>
        </div>
        <div>
            <label for="cover-image">Okładka</label>
            <input id="cover-image" name="cover" type="file" accept="image/*">
        </div>
        <div>
            <input id="rights-confirmation" name="rights_confirmation" type="checkbox" required>
            <label for="rights-confirmation">I confirm I have the rights to share this song</label>
        </div>
        <button type="submit">Prześlij utwór</button>
    </form>
</main>
