<div class="module-head">
<h3>Liste des Produits</h3>
</div>

    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">

            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Nom</th>
                <th class="text-center">Code</th>
                <th class="text-center">Categorie</th>
                <th class="text-center">Prix d'achat</th>
                <th class="text-center">Stock Minimal</th>
                <th class="text-center">Quantité Totale</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $compteur = 0;
                foreach ($produits as $produit) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $produit->nom_produit ; ?></td>
                        <td class="text-left"><?php echo $produit->code_produit ; ?></td>
                        <td class="text-left"><?php echo $produit->nom_categorie ; ?></td>
                        <td class="text-left"><?php echo $produit->prix_achat_produit ; ?></td>
                        <td class="text-left"><?php echo $produit->stock_minimal_produit ; ?></td>
                        <td class="text-left"><?php echo $produit->quantite_total_produit ; ?></td>
                        <td class="text-left"><a href="<?php echo URL . 'produit/modifierproduit/' . $produit->id_produit; ?>">Modifier</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
     </div>        