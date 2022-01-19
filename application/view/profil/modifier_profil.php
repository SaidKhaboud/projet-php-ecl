<div class="module-head">
<h3>Liste de profils</h3>
</div>
    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">

            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Nom Profil</th>
            </tr>
            </thead>

            <tbody class="table-hover">
                <?php 
                $compteur = 0;
                foreach ($profils as $profil) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $profil->nom; ?></td>
                        <td class="text-left"><a href="<?php echo URL . 'profil/modifierprofil/' . $profil->id_profil; ?>">Modifier</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
     </div>          