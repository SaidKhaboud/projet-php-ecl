

<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier Une Commande</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>commande/modifiercommande" method="POST" class="form-horizontal row-fluid">

            <div class="control-group">
            <label class="control-label">Fournisseur</label>
            <div class="controls">
            <input type="text" name="fournisseur_commande" value="<?php echo $commande_cible->nom_fournisseur;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Produit</label>
            <div class="controls">
            <input type="text" name="produit_commande" value="<?php echo $commande_cible->nom_produit;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Date</label>
            <div class="controls">
            <input type="text" name="date_commande" value="<?php echo $commande_cible->date_commande;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Quantite</label>
            <div class="controls">
            <input type="text" name="quantite_commande" value="<?php echo $commande_cible->quantite_commande;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Utilisateur</label>
            <div class="controls">
            <input type="text" name="user_commande" value="<?php echo $commande_cible->nom;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <label class="control-label">Etat</label>
            <div class="controls">
            <input type="text" name="etat_commande" value="<?php echo $commande_cible->etat_commande;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $commande_cible->id_commande; ?>" />
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