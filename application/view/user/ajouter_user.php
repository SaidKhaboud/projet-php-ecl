<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Création d'un compte utilisateur</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>user" method="POST" onSubmit="return verification(this)" enctype="multipart/form-data" class="form-horizontal row-fluid">

            <div class="control-group">
            <label class="control-label" for="file">Profil</label>
            <div class="controls">
            <select name="profil" >
                <?php
                $compteur = 0;
                foreach ($profils as $profil) 
                { 
                    $compteur ++;?>
                    <option <?php if(($profil_user == '') && ($compteur == 1)) echo 'selected'; else if ($profil_user == $profil->nom) echo 'selected'; ?> ><?php echo $profil->nom;?></option>
               <?php }?>
                
            </select>
            </div>
            </div>


            <div class="control-group">
            <label class="control-label" for="file">Identifiant</label>
            <div class="controls">
            <input type="text" name="login" value="<?php echo $login;?>" required />
            </div>
            </div>


            <div class="control-group">
            <label class="control-label" for="basicinput">Mot de passe</label>
            <div class="controls">
            <input type="password" name="password1" value="" required>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label" for="basicinput">Répétez la Mot de passe</label>
            <div class="controls">
            <input type="password" name="password2" value="" required>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label" for="basicinput">Nom</label>
            <div class="controls">
            <input type="text" name="nom" value="<?php echo $nom;?>" required />
            </div>
            </div>

            <div class="control-group">
            <label class="control-label" for="basicinput">Prénom</label>
            <div class="controls">
            <input type="text" name="prenom" value="<?php echo $prenom;?>" required />
            </div>
            </div>

            <div class="control-group">
            <label class="control-label" for="file">Votre Image</label>
            <div class="controls">
            <input type="file" name="file" id="file">
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


<div class="cd-popup" role="alert" id="cachepass">
    <div class="cd-popup-container">
        <p>Ce ne sont pas les mêmes mots de passe!</p>
        <ul class="cd-buttons">
            <li><a href="#" onclick="validation2()">Valider</a></li>
        </ul>
        <a href="#" class="cd-popup-close img-replace">Close</a>
    </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
</div>

<script language="javascript">
function validation() 
{
    document.getElementById("cache").className = "cd-popup";
}

function validation2() 
{
    document.getElementById("cachepass").className = "cd-popup";
}

function verification(f) 
{
    if (f.password1.value != f.password2.value) 
    {
        document.getElementById("cachepass").className = "cd-popup is-visible";
        f.password1.value = "";
        f.password2.value = "";
        f.password1.focus();
        return false;
    }
    else if (f.password1.value == f.password2.value) 
    {
        return true;
    }

}
</script>