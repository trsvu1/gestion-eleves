<br>
<h3> Liste des Eleves ( <?= (isset($lesEleves))? count($lesEleves) : '' ?> )</h3>

<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>

<br>

<table border="1">
    <tr>
        <td> Id Eleve</td>
        <td> Nom </td>
        <td> Prénom </td>
        <td> Classe </td>
        <td> Matière 1 </td>
        <td> Matière 2 </td>
        <td> Matière 3 </td>
        <td> Matière 4 </td>
        <td> Matière 5 </td>
    </tr>

    <?php
    //liste des clients de la BDD 
    if(isset($lesEleves)){
        foreach ($lesEleves as $unEleve) {
            echo "<tr>";
            echo "<td>" . $unEleve["id_eleve"] . "</td>";
            echo "<td>" . $unEleve["nom"]      . "</td>";
            echo "<td>" . $unEleve["prenom"]   . "</td>";
            echo "<td>" . $unEleve["classe"]   . "</td>";
            echo "<td>" . (isset($unEleve["matiere1"]) ? $unEleve["matiere1"] : 'N/A') . "</td>";
            echo "<td>" . (isset($unEleve["matiere2"]) ? $unEleve["matiere2"] : 'N/A') . "</td>";
            echo "<td>" . (isset($unEleve["matiere3"]) ? $unEleve["matiere3"] : 'N/A') . "</td>";
            echo "<td>" . (isset($unEleve["matiere4"]) ? $unEleve["matiere4"] : 'N/A') . "</td>";
            echo "<td>" . (isset($unEleve["matiere5"]) ? $unEleve["matiere5"] : 'N/A') . "</td>";

            echo "<td>" ;

            echo "<a href='index.php?page=2&action=sup&id_eleve=".$unEleve["id_eleve"]."'> <img src='images/supprimer.png' heigth='30' width='30'> </a>"; 

            echo "<a href='index.php?page=2&action=edit&id_eleve=".$unEleve["id_eleve"]."'> <img src='images/editer.png' heigth='30' width='30'> </a>"; 

            echo "</td>";

            echo "</tr>";
        }
    }
    ?>
</table>
<br> <br> <br> 









