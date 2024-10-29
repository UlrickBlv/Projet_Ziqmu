<div id="contenu">
    <?php
        foreach($lesCours as $unCours)
        {
            $idCour = $unCours['IdCour'];
            $Instrument = $unCours['Instrument'];
            $Date= $unCours['Date'];
            $idProfesseur= $unCours['idProfesseur'];
            $numero = $unCours['IdCour'];

            echo "_________________________________________________________________________________________";
            echo "</br></br>";
            echo "Cours : ".$unCours['IdCour']."</br>";
            echo "Instrument : ".$unCours['Instrument']."</br>"; 
            echo "Date : ".$unCours['Date']."</br>";
            echo "Professeur : ".$unCours['idProfesseur']."</br>";
            echo "<a href ='index.php?action=inscrire&numero=$numero'>Inscrire</a>";
            echo "<br/>";
        }
    ?>
</div>