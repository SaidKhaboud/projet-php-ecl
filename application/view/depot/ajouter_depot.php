<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Ajouter un dépôt</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>depot" method="POST" class="form-horizontal row-fluid">
        <div class="control-group">

            <label class="control-label" for="basicinput">Nom du dépot</label>
            <div class="controls">
            <input type="text" name="nom_depot" required />
        </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="basicinput">L'adresse</label>
            <div class="controls">
            <input type="text" name="adresse_depot" required />
        </div>
        </div>            

        <div class="control-group"> 
            <input type="submit" name="valider_ajouter_depot" value="Envoyer"/>
            <input type="reset" value="Annuler"/>

        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>