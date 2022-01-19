<div class="module-head">
<h3>Liste des categories</h3>
</div>
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Nom</th>
                <th class="text-center">Description</th>
                <th class="text-center">Image</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $compteur = 0;
                foreach ($categories as $categorie) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $categorie->nom_categorie ; ?></td>
                        <td class="text-left"><?php echo $categorie->description_categorie ; ?></td>
                        <td class="text-left"><?php echo $categorie->image_categorie ; ?></td>
                        <td class="text-left"><a href="<?php echo URL . 'categorie/supprimercategorie/' . $categorie->id_categorie; ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

              </div>
     </div>