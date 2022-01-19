
<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Créer un nouveau menu </h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>menu" method="POST" class="form-horizontal row-fluid">
            <div class="control-group">
            <label class="control-label" for="basicinput">Nom</label>
            <div class="controls">
            <input type="text" name="nom" required />
            </div>
            </div>

            <div class="control-group">
            <label class="control-label" for="basicinput">Lien</label>
            <div class="controls">
            <input type="text" name="lien" id = "lien" value="<?php echo $lien;?>" required readonly/>
            </div>
            </div>          

            <div class="control-group">
            <label class="control-label" for="basicinput">Parent</label>
            <div class="controls">
            <select id= "parent" name="parent" onchange ="changer_menu()" >
                <option <?php if($parent_selecte == 'NULL') echo 'selected';?> >Pas de Parent</option>
                <?php
                foreach ($menus as $menu) 
                { ?>
                    <option <?php if($parent_selecte == $menu->nom) echo 'selected';?> ><?php echo $menu->nom;?></option>
               <?php }?>
                
            </select>
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


<script language="javascript">
function changer_menu()
{ 
    var bool = false;
    var select = document.getElementById("parent");

    for (i=0; i<select.options.length; i++) 
    { 
      if ((select.options[i].selected ) && (select.options[i].text == "Pas de Parent" ))
      { 
        bool = true;
        document.getElementById("lien").readOnly = true;
      } 
    }

    if(bool == false)
    {
        document.getElementById("lien").readOnly = false;
    } 
}
</script>