<div class="module-head">
<h3>Liste des Commandes</h3>
</div>
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
    <thead>
    <tr>
        <th class="text-center">N°</th>
        <th class="text-center">fournisseur</th>
        <th class="text-center">Produit</th>
        <th class="text-center">Date</th>
        <th class="text-center">Quantite</th>
        <th class="text-center">User</th>
        <th class="text-center">Etat</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($commandes as $commande) 
        { ?>
            <tr>
                <td class="text-left"><?php echo $commande->id_commande; ?></td>
                <td class="text-left"><?php echo $commande->nom_fournisseur ; ?></td>
                <td class="text-left"><?php echo $commande->nom_produit ; ?></td>
                <td class="text-left"><?php echo $commande->date_commande ; ?></td>
                <td class="text-left"><?php echo $commande->quantite_commande ; ?></td>
                <td class="text-left"><?php echo $commande->nom ; ?></td> <!--user-->
                <td class="text-left"><?php echo $commande->etat_commande ; ?></td>
                <td class="text-left"><a href="<?php echo URL . 'commande/supprimercommande/' . $commande->id_commande; ?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

              </div>
     </div>