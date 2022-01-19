<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">

        <h3>Repartition du produit <?php echo $produit_cible->nom_produit ?> sur les depots correspondants</h3>
		<div>
        
        <?php foreach ($depots as $depot) { ?>
            <hr>
            <p>Dépôt : <?php if (isset($depot->nom_depot)) echo $depot->nom_depot ; ?> </p>
            <p>La quantité dans Dépôt : <?php if (isset($depot->quantite_reel)) echo $depot->quantite_reel ; ?></p>
			<hr>
            
        <?php } ?>
        
</div>
</div>
</div>
</div>
</div>
</div>
</div>