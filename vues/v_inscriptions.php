<table id="reservation">    
    <br/><caption id="caption">Liste des inscriptions</caption>
        <tr id="reservation">
            <td id="reservation">N* Cours</td>
            <td id="reservation">N* Adherent</td>
            <td id="reservation">Prenom</td>
            <td id="reservation">Nom</td>
            <td id="reservation">PDF</td>
            <td id="reservation">Supprimer</td>
            
        </tr>
        <?php
            for($i=0;$i<=count($lesInscriptions)-1;$i++){
                echo '<tr id="reservation">' ;
                echo '<td id="reservation">'.$lesInscriptions[$i]['idCour'].'</td>' ;
                echo '<td id="reservation">'.$lesInscriptions[$i]['idAdherent'].'</td>' ;
                echo '<td id="reservation">'.$lesInscriptions[$i]['prenom'].'</td>' ;
                echo '<td id="reservation">'.$lesInscriptions[$i]['nom'].'</td>' ;
                echo "<td id='reservation'><a href='index.php?action=pdfInscription&numInscription=$i'><img src ='images/pdf_icon.gif' width='10'></a></td>";
                echo "<td id='reservation'><a type='submit' href='index.php?action=supprimer&numInscriptionSup=$i'> Supprimer </a></td>";
                echo '</tr>';
            }
        ?>
    </table>