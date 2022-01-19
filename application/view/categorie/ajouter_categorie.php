<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Définir une catégorie </h3>
    </div>
    
    <div class="module-body">
    <form action= "<?php echo URL; ?>categorie" method="POST" class="form-horizontal row-fluid">
        <div class="control-group">
            <label class="control-label" for="basicinput">Nom du categorie</label>
            <div class="controls">
            <input type="text" name="nom_categorie" required />
            </div>
            </div>

        <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
            <input type="text" name="description_categorie" required />
            </div>
            </div>
            
        <div class="control-group">            
            <label class="control-label" for="basicinput">Image</label>
            <div class="controls">
            <input type="text" name="image_categorie"/>
            </div>
            </div>

            <div class="control-group">
            <input type="submit" name="valider_ajouter" value="Envoyer"/>
            <input type="reset" value="Annuler"/>
            </div>
            

        
    </form>
</div>
</div>
</div>
</div>
</div>
</div>