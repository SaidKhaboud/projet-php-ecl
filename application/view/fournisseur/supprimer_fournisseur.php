<div class="module-head">
<h3>Liste des fournisseurs</h3>
</div>
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">


            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Nom</th>
                <th class="text-center">Adresse</th>
                <th class="text-center">numéro de téléphone</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $compteur = 0;
                foreach ($fournisseurs as $fournisseur) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $fournisseur->nom_fournisseur ; ?></td>
                        <td class="text-left"><?php echo $fournisseur->addresse_fournisseur ; ?></td>
                        <td class="text-left"><?php echo $fournisseur->num_tel_fournisseur ; ?></td>
                        <td class="text-left"><a href="<?php echo URL . 'fournisseur/supprimerfournisseur/' . $fournisseur->id_fournisseur; ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
                      </div>
     </div>