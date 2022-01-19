

<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier un fournisseur</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>fournisseur/modifierfournisseur" method="POST" class="form-horizontal row-fluid">
        
            
            <div class="control-group">
            <label class="control-label">Nom du fournisseur</label>
            <div class="controls">
            <input type="text" name="nom_fournisseur" value="<?php echo $fournisseur_cible->nom_fournisseur;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Adresse</label>
            <div class="controls">
            <input type="text" name="addresse_fournisseur" value="<?php echo $fournisseur_cible->addresse_fournisseur;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Numéro de téléphone</label>
            <div class="controls">
            <input type="text" name="num_tel_fournisseur" value="<?php echo $fournisseur_cible->num_tel_fournisseur;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $fournisseur_cible->id_fournisseur; ?>" />
            </div>
            
            <div class="control-group">
            <input type="submit" name="valider_modifier" value="Modifier" />
            <input type="submit" name="annuler" value="Annuler" />
            </div>

       
    </form>
</div>
</div>
</div>
</div>
</div>
</div>