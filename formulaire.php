<p><?= actionform() ?></p>

<form method="post" action ='./index.php'>

<input type="text" name="name" value="<?= emptying('postname') ?>" placeholder="prénom*">
    <input type="text" name="lastname" value="<?= emptying('postlastname') ?>" placeholder="nom*">
    <input type="text" name="e-mail" value="<?= emptying('postemail') ?>" placeholder="e-mail*">
    <br>

    <select name="gender" id="genre">
        <option value="Homme" <?= gendervalide('Homme') ?>>Homme</option>
        <option value="Femme" <?= gendervalide("Femme") ?>>Femme</option>
    </select>

    <select name="subject" id="option">
        <option value="SAV" <?= subjectvalide('SAV') ?>>Service Après Vente</option>
        <option value="Achats" <?= subjectvalide('Achats') ?>>Achats</option>
        <option value="Autres" <?= subjectvalide('Autres') ?>>Autres</option>
    </select>

    <br>
    <button type="submit">Submit</button>

</form>