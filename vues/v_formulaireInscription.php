<div id="contenu">
    <br/><br/>
    <table id="formulaire">
        <form method="post" action="index.php?action=validerInscription">

            <tr>
                <td colspan="2" id="titre">Reservation du Cours numero : <?php echo $numero; ?><input type='hidden' value=<?php echo $numero; ?> name='numero'></td>
            </tr>
            <tr>
                <td>Nom* :</td>
                <td><input type='text' name='nom' ></td>
            </tr>
            <tr>
                    <td>Prenom* :</td>
                    <td><input type='text' name='prenom'></td>
            </tr>
            <tr>
                    <td>Adresse* :</td>
                    <td><input type='text' name='adresse'></td>
            </tr>
            <tr>
                    <td>Mail* :</td>
                    <td><input type='text' name='mail'></td>
            </tr>
            <tr>
                    <td><input type="submit" name='valide' value="Valider"></td>
                    <td><input type="submit" name='supprime' value="Annuler"></td>
            </tr>
        </form>
    </table>
</div>