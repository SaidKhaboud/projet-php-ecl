

<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier Un Produit</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>produit/modifierproduit" method="POST" class="form-horizontal row-fluid">
        <table class="table">
            
            <div class="control-group">
            <label class="control-label">Nom du produit</label>
            <div class="controls">
            <input type="text" name="nom_produit" value="<?php echo $produit_cible->nom_produit;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Code</label>
            <div class="controls">
            <input type="text" name="code_produit" value="<?php echo $produit_cible->code_produit;?>" required />
            </div>
            </div>
            
             <div class="control-group">
            <label class="control-label">Categorie</label>
            <div class="controls">
            <input type="text" name="nom_categorie" value="<?php echo $produit_cible->nom_categorie;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Le Prix d'Achat</label>
            <div class="controls">
            <input type="text" name="prix_achat_produit" value="<?php echo $produit_cible->prix_achat_produit;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Le Stock Minimal</label>
            <div class="controls">
            <input type="text" name="stock_minimal_produit" value="<?php echo $produit_cible->stock_minimal_produit;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $produit_cible->id_produit; ?>" />
            </div>
            
            <div class="control-group">
            <input type="submit" name="valider_modifier" value="Modifier" />
            <input type="submit" name="annuler" value="Annuler" />
            </div>
            

        </table>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>