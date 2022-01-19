

<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier Un Profil</h3>
    </div>
    <div class="module-body">
    <form action="<?php echo URL; ?>profil/modifierprofil" method="POST" class="form-horizontal row-fluid">
        

            <div class="control-group">
            <label class="control-label">Nom</label>
            <div class="controls">
            <input type="text" name="name" value="<?php echo $profil->nom; ?>" required />
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $profil->id_profil; ?>" />
            </div>
            </div>
            
            <div class="control-group">
            <input type="submit" name="valider_modifier" value="Modifier" />
            <input type="submit" name="annuler" value="Annuler" />
            </div>
            </div>
            
        
    </form>
</div>
</div>
</div>
</div>
</div>
</div>