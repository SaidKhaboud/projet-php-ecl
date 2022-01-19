<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier une Categorie</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>categorie/modifiercategorie" method="POST" class="form-horizontal row-fluid">
    
            <div class="control-group">
            <label class="control-label">Nom du categorie</label>
            <div class="controls">
            <input type="text" name="nom_categorie" value="<?php echo $categorie_cible->nom_categorie;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Description</label>
            <div class="controls">
            <input type="text" name="description_categorie" value="<?php echo $categorie_cible->description_categorie;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Image</label>
            <div class="controls">
            <input type="text" name="image_categorie" value="<?php echo $categorie_cible->image_categorie;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $categorie_cible->id_categorie; ?>" />
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
