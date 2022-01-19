<?php 
if(count($produits) == 0)
{ ?>
	<div class="module-head">
	<h3>Pas d'Alertes.</h3>
	</div>
<?php }else
{ ?>
    <div class="module-head">
	<h3>Vos Alertes</h3>
	</div>
	
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">

	    <thead>
	    <tr>
	        <th class="text-center">N°</th>
	        <th class="text-center">Nom Produit</th>
	        <th class="text-center">Stock Minimal</th>
	        <th class="text-center">Stock Total</th>
	    </tr>
	    </thead>

	    <tbody class="table-hover">
	        <?php 
	        $compteur = 0;
	        foreach ($produits as $produit) 
	        { 
	            $compteur ++?>
	            <tr>
	                <td class="text-left"><?php echo $compteur; ?></td>
	                <td class="text-left"><?php echo $produit->nom_produit; ?></td>
	                <td class="text-left"><?php echo $produit->stock_minimal_produit; ?></td>
	        		<td class="text-left"><?php echo $produit->quantite_total_produit; ?></td>
	            </tr>
	        <?php } ?>
	    </tbody>
	</table>
                          </div>
     </div>
<?php } ?>
    
