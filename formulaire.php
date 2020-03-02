<form action="" method="post">

<input type="text" name="name" placeholder="prénom*">
    <input type="text" name="lastname" value="<?= emptying('lastname') ?>" placeholder="nom*">
    <input type="text" name="e-mail" placeholder="e-mail*">
    <br>

    <select name="gender" id="genre">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select>

    <select name="subject" id="option" form="1">
        <option value="SAV">Service Après Vente</option>
        <option value="Achats">Achats</option>
        <option value="Autres">Autres</option>
    </select>

    <br>
    <button type="submit">Submit</button>

</form>