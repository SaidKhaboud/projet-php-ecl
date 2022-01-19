

<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier Un depot</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>depot/modifierdepot" method="POST" class="form-horizontal row-fluid">
        
            
            <div class="control-group">
            <label class="control-label">Nom du depot</label>
            <div class="controls">
            <input type="text" name="nom_depot" value="<?php echo $depot_cible->nom_depot;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Adresse</label>
            <div class="controls">
            <input type="text" name="adresse_depot" value="<?php echo $depot_cible->adresse_depot;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $depot_cible->id_depot; ?>" />
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