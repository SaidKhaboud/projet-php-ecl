<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Définir un produit</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>produit" method="POST" class="form-horizontal row-fluid">
        


            <div class="control-group">
            <label class="control-label" for="basicinput">Nom du produit</label>
            <div class="controls">
            <input type="text" name="nom_produit" required />
            </div>
            </div>
            

            <div class="control-group">
            <label class="control-label" for="basicinput">Code Barre</label>
            <div class="controls">
            <input type="text" name="code_produit" required />
            </div>
            </div>

            <div class="control-group">
            <label class="control-label" for="basicinput">Catégorie</label>
            <div class="controls">
            <select name="categorie_produit">
            <?php foreach ($categories as $categorie) {
            if (isset($categorie->nom_categorie)) echo "<option value=".$categorie->id_categorie .">".$categorie->nom_categorie."</option>" ; } ?>
            </select>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label" for="basicinput">Prix d'achat</label>
            <div class="controls">
            <input type="text" name="prix_achat_produit" required />
            </div>
            </div>            

            <div class="control-group">
            <label class="control-label" for="basicinput">Stock Minimal</label>
            <div class="controls">
            <input type="text" name="stock_minimal_produit" required />
            </div>
            </div> 

            <div class="control-group">
            <input type="submit" name="valider_ajouter_produit" value="Envoyer"/>
            <input type="reset" value="Annuler"/>
            </div>
            

      
    </form>
    </div> 
</div>
</div>
</div>
</div>
</div>
