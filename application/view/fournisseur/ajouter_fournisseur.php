<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Ajouter un nouveau fournisseur</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>fournisseur" method="POST" class="form-horizontal row-fluid">
        <div class="control-group">
        <label class="control-label" for="basicinput">Nom du fournisseur</label>
        <div class="controls">
        <input type="text" name="nom_fournisseur" required />
        </div>
        </div>
        

            <div class="control-group">
            <label class="control-label" for="basicinput">L'adresse</label>
            <div class="controls">
            <input id="basicinput" type="text" name="addresse_fournisseur" required />
            </div>
            </div>            

            <div class="control-group">
            <label class="control-label" for="basicinput">Numero de téléphone</label>
            <div class="controls">
            <input id="basicinput" type="text" name="num_tel_fournisseur" required />
            </div>
            </div>   
            
            <div class="control-group">
            <input type="submit" name="valider_ajouter_fournisseur" value="Envoyer"/>
            <input type="reset" value="Annuler"/>
            </div>
            

       
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
