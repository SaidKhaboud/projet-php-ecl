
<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Passer une commande </h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>commande" method="POST" class="form-horizontal row-fluid">
        <div class="control-group">
        <label class="control-label" for="basicinput">Fournisseur</label>
        <div class="controls">
        <select name="fournisseur_commande" class="span8">
        <?php foreach ($fournisseurs as $fournisseur) { ?>
        <?php if (isset($fournisseur->nom_fournisseur)) echo "<option value=".$fournisseur->id_fournisseur.">".$fournisseur->nom_fournisseur."</option>" ; ?>
        <?php } ?>
        </select>
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label" for="basicinput">Produit</label>
        <div class="controls">
        <select name="produit_commande" class="span8">
        <?php foreach ($produits as $produit) { ?>
        <?php if (isset($produit->nom_produit)) echo "<option value=".$produit->id_produit.">".$produit->nom_produit. "</option>" ; ?>
        <?php } ?>
        </select>
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label" for="basicinput">Utilisateur</label>
        <div class="controls">
        <select name="user_commande" class="span8">
        <?php foreach ($users as $user) { ?>
        <?php if (isset($user->nom)) echo "<option value=".$user->id_user.">".$user->nom."</option>" ; ?>
        <?php } ?>
        </select>
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label" for="basicinput">Quantité</label>
        <div class="controls">
        <input type="text" name="quantite_commande" size="12" required />
        </div>
        </div>
        
        <div class="control-group">
        <div class="controls">
        <input type="submit" name="valider_ajouter_commande" value="Commander" />
        <input type="submit" name="reintialiser" value="Réintialiser" />
        </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
