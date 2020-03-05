
<form method="post" action ='./index.php'>
    <input type="hidden" name="pays">
    <input type="hidden" name="country">
    <div class="firstline">
<input type="text" name="name" id="name" value="<?= emptying($postname) ?>" placeholder="prénom*">
    <input type="hidden" name="pays">
    <input type="text" name="lastname" id="lastname" value="<?= emptying($postlastname) ?>" placeholder="nom*">
    <input type="hidden" name="pays">
    <input type="hidden" name="country">
    <input type="text" name="e-mail" id="email" value="<?= emptying($postemail) ?>" placeholder="e-mail*">
    </div>
    <br>
    <input type="hidden" name="country">
    <div class="secondline">
    <select name="gender" id="genre">
        <option value="Homme" <?= gendervalide('Homme') ?>>Homme</option>
        <option value="Femme" <?= gendervalide("Femme") ?>>Femme</option>
    </select>
    <input type="hidden" name="pays">
    <input type="hidden" name="country">
    <select name="subject" id="option">
        <option value="SAV" <?= subjectvalide('SAV') ?>>Service Après Vente</option>
        <option value="Achats" <?= subjectvalide('Achats') ?>>Achats</option>
        <option value="Autres" <?= subjectvalide('Autres') ?>>Autres</option>
    </select>
        <select name="monpays" id="option">
            <option value="Belgique" <?= countryvalide('Belgique') ?>>Belgique</option>
            <option value="Allemagne"  <?= countryvalide('Allemagne') ?>>Allemagne</option>
            <option value="Îles Saint-Paul et Nouvelle-Amsterdam"  <?= countryvalide('Îles Saint-Paul et Nouvelle-Amsterdam') ?>>Îles Saint-Paul et Nouvelle-Amsterdam</option>
        </select>
    </div>
    <input type="hidden" name="pays">
    <input type="hidden" name="country">
    <textarea name="text" id="text" cols="50" rows="5" ><?= emptying($posttext) ?></textarea>
    <br>
    <button type="submit" id="button">Submit</button>

</form>