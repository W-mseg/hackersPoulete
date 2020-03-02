<form "<?= actionform()?>" method="post">

<input type="text" name="name" value="<?= emptying('name') ?>" placeholder="prénom*">
    <input type="text" name="lastname" value="<?= emptying('lastname') ?>" placeholder="nom*">
    <input type="text" name="e-mail" value="<?= emptying('e-mail') ?>" placeholder="e-mail*">
    <br>

    <select name="gender" id="genre">
        <option value="Homme" <?= selected('Homme') ?>>Homme</option>
        <option value="Femme" <?= selected("Femme") ?>>Femme</option>
    </select>

    <select name="subject" id="option">
        <option value="SAV" <?= selected('SAV') ?>>Service Après Vente</option>
        <option value="Achats" <?= selected('Achats') ?>>Achats</option>
        <option value="Autres" <?= selected('Autres') ?>>Autres</option>
    </select>

    <br>
    <button type="submit">Submit</button>

</form>