<div class="module-head">
<h3>Liste des menus</h3>

	</script>

</div>
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">

            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Nom Menu</th>
                <th class="text-center">Parent</th>
                <th class="text-center">Lien</th>
            </tr>
            </thead>

            <tbody class="table-hover">
                <?php 
                $compteur = 0;
                foreach ($all_menus as $all_menu) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $all_menu->nom; ?></td>
                        <td class="text-left"><?php $parent = $this->model->get_menu_id($all_menu->id_menu_parent); if(isset($parent->nom) == true) echo $parent->nom; else echo 'Pas de Parent'; ?></td>
                        <td class="text-left"><?php if($all_menu->lien != NULL) echo $all_menu->lien; else echo 'Pas de Lien'; ?></td>
                        <td class="text-left"><a href="<?php echo URL . 'menu/modifiermenu/' . $all_menu->id_menu; ?>">Modifier</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        

     </div>
     </div>