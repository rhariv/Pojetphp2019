<form action="supr_modif.php" method="POST" id="formulaire">
	<table id="tableau" style="height: 145px;">
		<tr>
			<td>
				<label for="nomEntreprise" id="legende" class="legende">nomEntreprise*</label>
			</td>
			<td>
				<label for="code_postal" id="legende" class="legende">code postal*</label>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name ="nomEntreprise" value="nomEntreprise" />
			</td>
			<td>
				<input type="text" name ="codePostal" value="codePostal" />
			</td>
			<td>
				<input type="text" name="ville" value="ville">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="rechercher" value="Rechercher">
			</td>
		</tr>
	</table>
</form>

