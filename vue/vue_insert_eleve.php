<br>
<h3>Ajout d'un Eleve</h3>
<form method="post">
	<table>
		<tr>
			<td> Nom : </td>
			<td> <input type="text" name="nom" 
				value="<?= ($leEleve==null)?'':$leEleve['nom'] ?>"></td>
		</tr>

		<tr>
			<td> Prénom : </td>
			<td> <input type="text" name="prenom"
				value="<?= ($leEleve==null)?'':$leEleve['prenom'] ?>"></td>
		</tr>

		<tr>
			<td> Classe : </td>
			<td> <input type="text" name="classe"
				value="<?= ($leEleve==null)?'':$leEleve['classe'] ?>"></td>
		</tr>

		<tr>
			<td colspan="2" style="text-align: center;">
				<input type="reset" name="Annuler" value="Annuler">
				<input type="submit" 
					<?= ($leEleve==null)? ' name="Valider" value="Valider" ' : 
					' name ="Modifier" value ="Modifier" ' ?>
				>
			</td>
		</tr>
		<?= ($leEleve==null)? '' : '<input type="hidden" name ="id_eleve" 
		value="'.$leEleve['id_eleve'].'" >' ?>

	</table>
</form>








