<div class="cd-popup is-visible" role="alert" id="cache">
	<div class="cd-popup-container">

		<p>Etes Vous sûr pour supprimer <?php echo $depot_cible->nom_depot;?> ?</p>

		<ul class="cd-buttons">
			<li>
			<form action="<?php echo URL; ?>depot/supprimerdepot" method="POST">
	            	<input type="hidden" name="id" value="<?php echo $depot_cible->id_depot;  ?>" />
	           		<input type="submit" name="valider_supprimer" value="Valider" />
	      	</form>
	      	</li>

			<li><a href="#" onclick="validation()">Annuler</a></li>
		</ul>
		<a href="#" class="cd-popup-close img-replace">Close</a>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->

<script language="javascript">
function validation() 
{
    document.getElementById("cache").className = "cd-popup";
}
</script>