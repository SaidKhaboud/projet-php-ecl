<link rel="stylesheet" href="<?php echo URL; ?>css/jsDatePick_ltr.min.css">

<div class= "container">
<div class="module-head">
<h3>L'historique de votre stock </h3>
</div>

    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <form action= "<?php echo URL; ?>stock/consulterhistorique" method="POST" class="form-horizontal row-fluid">
        
            <div class="module-head">
            <h3 style="font-size: 1.2em; margin: 20px;">Options de filtrage</h3>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="basicinput">Produit</label>
            <div class="controls">
            <select name="produit_stock" class="span8">
            <option value="0">Tous les produits: </option>
            <?php foreach ($produits as $produit) { ?>
            <?php if (isset($produit->nom_produit)) {echo "<option value=".$produit->id_produit ; if($produit->id_produit==$options['produit_stock']) {echo ' selected="selected"' ;} echo ">". $produit->nom_produit ."</option>" ;} ?>
            <?php } ?>
            </select>
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="basicinput">depot :</label>
            <div class="controls">
            <select name="depot_stock" class="span8">
            <option value="0">Tous les depots</option>
            <?php foreach ($depots as $depot) { ?>
            <?php if (isset($depot->nom_depot)) {echo "<option value=".$depot->id_depot ; if($depot->id_depot==$options['depot_stock']) {echo ' selected="selected"' ;} echo ">". $depot->nom_depot ."</option>" ;} ?>
            <?php } ?>
            </select>
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="basicinput">Date de début:</label>
            <div class="controls">
            <input type="text" name="date_stock_1" id="date_stock_1" size="10" value="<?php if($options['date_stock_1']!='0') {echo $options['date_stock_1'];} ?>" />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="basicinput">Date de fin:</label>
            <div class="controls">
            <input type="text" name="date_stock_2" id="date_stock_2" size="10" value="<?php if($options['date_stock_2']!='0') {echo $options['date_stock_2'];} ?>" />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="basicinput">Utilisateur</label>
            <div class="controls">
            <select name="user_stock" class="span8">
            <option value="0">Tous les users</option>
            <?php foreach ($users as $user) { ?>
            <?php if (isset($user->nom)) {echo "<option value=".$user->id_user ; if($user->id_user==$options['user_stock']) {echo ' selected="selected"' ;} echo ">". $user->nom ."</option>" ;} ?>
            <?php } ?>
            </select>
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="basicinput">Type de mouvement :</label>
            <div class="controls">
            <select name="type_mouvement_stock" class="span8">
            <option value="0" >Tous mouvements</option>
            <option value="approvisionnement" value="<?php if($options['type_mouvement_stock']=='approvisionnement') {echo 'selected="selected"';} ?>">Approvisionnement</option>
            <option value="sortie" "<?php if($options['type_mouvement_stock']=='sortie'){echo 'selected="selected"' ;} ?>" >Sortie</option>
            </select>
            </div>
            </div>

            <div class="control-group">
            <div class="controls">
            <input type="submit" name="valider_consulter_historique" value="Envoyer"/>
            <input type="reset" value="Annuler"/>
            </div>
            </div>

            
    </form>
    </div>
    </div>
    </div>

    <div class="module">
        <div class="module-body table">
			<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">

            <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Produit</th>
                <th class="text-center">depot</th>
                <th class="text-center">Date</th>
                <th class="text-center">User</th>
                <th class="text-center">Quantite</th>
                <th class="text-center">Type de mouvement</th>
                <th class="text-center">Type de soritie</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $compteur = 0;
                foreach ($historique as $hist) 
                { 
                    $compteur ++?>
                    <tr>
                        <td class="text-left"><?php echo $compteur; ?></td>
                        <td class="text-left"><?php echo $hist->nom_produit ; ?></td>
                        <td class="text-left"><?php echo $hist->nom_depot ; ?></td>
                        <td class="text-left"><?php echo $hist->date_stock ; ?></td>
                        <td class="text-left"><?php echo $hist->nom ; ?></td> <!--user-->
                        <td class="text-left"><?php echo $hist->quantite_stock ; ?></td>
                        <td class="text-left"><?php echo $hist->type_mouvement_stock ; ?></td>
                        <td class="text-left"><?php echo $hist->type_sortie_stock ; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

     </div>
     </div>
     </div>  
    </div>
    </div>     

<script type="text/javascript" src="<?php echo URL; ?>js/jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
    window.onload = function(){
        new JsDatePick({
            useMode:2,
            target:"date_stock_1",
            dateFormat:"%Y-%m-%d"
        });
        new JsDatePick({
            useMode:2,
            target:"date_stock_2",
            dateFormat:"%Y-%m-%d"
        });
    };
</script>
