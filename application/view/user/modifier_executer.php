
<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier Un Compte</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>user/modifieruser" method="POST" class="form-horizontal row-fluid">
        <div class="control-group">

            
            <label class="control-label">Profil</label>
            <div class="controls">
            <select name="profil" >
                <?php
                $compteur = 0;
                foreach ($profils as $profil) 
                { 
                    $compteur ++;?>
                    <option <?php if($user_cible->id_profil ==  $profil->id_profil) echo 'selected';?> ><?php echo $profil->nom;?></option>
               <?php }?>
                
            </select>
            </div>
            </div>


            <div class="control-group">
            <label class="control-label">Identifiant</label>
            <div class="controls">
            <input type="text" name="login" value="<?php echo $user_cible->login;?>" required />
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Nom</label>
            <div class="controls">
            <input type="text" name="nom" value="<?php echo $user_cible->nom;?>" required />
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Prénom</label>
            <div class="controls">
            <input type="text" name="prenom" value="<?php echo $user_cible->prenom;?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $user_cible->id_user; ?>" />
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