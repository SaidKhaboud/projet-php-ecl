<div class= "container">
    <div class="row">
    <div class="span9">
    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Modifier Un Menu</h3>
    </div>
    <div class="module-body">
    <form action="<?php echo URL; ?>menu/modifiermenu" method="POST" class="form-horizontal row-fluid">
        <table class="table">

            <div class="control-group">
            <label class="control-label">Nom</label>
            <div class="controls">
            <input type="text" name="nom" value="<?php echo $menu_cible->nom; ?>" required />
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Lien</label>
            <div class="controls">
            <input id="lien" type="text" name="lien" value="<?php echo $menu_cible->lien; ?>" required  <?php if(isset($parent->nom) == false) echo 'readonly'; ?>/>
            </div>
            </div>

            <div class="control-group">
            <label class="control-label">Parent</label>
            <div class="controls">
            <select id= "parent" name="parent" onchange ="changer_menu()" >
                <option <?php if(isset($parent->nom) == false) echo 'selected';?> >Pas de Parent</option>
                <?php
                foreach ($menus as $menu) 
                { ?>
                    <option <?php if((isset($parent->nom) == true) && ($parent->nom == $menu->nom )) echo 'selected';?> ><?php echo $menu->nom;?></option>
               <?php }?>
                
            </select>
            </div>
            </div>
            
            <div class="control-group">
            <input type="hidden" name="id" value="<?php echo $menu_cible->id_menu; ?>" />
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