<div class="module-head">
<h3>Liste des dépôts</h3>
</div>
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Nom</th>
                <th class="text-center">Adresse</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $compteur = 0;
                foreach ($depots as $depot) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $depot->nom_depot ; ?></td>
                        <td class="text-left"><?php echo $depot->adresse_depot ; ?></td>
                        <td class="text-left"><a href="<?php echo URL . 'depot/modifierdepot/' . $depot->id_depot; ?>">Modifier</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        
                      </div>
     </div>