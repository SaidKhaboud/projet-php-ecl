



    <div class="content">
    <div class="module">
    <div class="module-head">
    <h3>Nouveau profil</h3>
    </div>
    <div class="module-body">
    <form action= "<?php echo URL; ?>profil" method="POST" class="form-horizontal row-fluid">


         
            <div class="control-group">
            <label class="control-label" for="nom">Nom du profil</label>
            <div class="controls">
            <input id="nom" type="text" name="nom" required />
            </div>
            </div>

            <div class="le_menu">
            
            <?php 
            $all_menus = $this->model->get_all_menu();
            $compteur = 0;
            foreach ($all_menus as $all_menu) 
            {  
                $compteur ++;
                $sous_menus = $this->model->get_all_sous_menu($all_menu->id_menu);
                ?>

                <div class="un_menu">
                <p><input type="checkbox" onclick="toucher_pere_<?php echo $compteur; ?>(this)"  id="box_pere_<?php echo $compteur; ?>"><label for="box_pere_<?php echo $compteur; ?>"><span class="ui"></span><?php echo $all_menu->nom;?></label></p>
                 
                
                <script language="javascript">
                function toucher_pere_<?php echo $compteur;?>(box) 
                {
                    if(box.checked == true)
                    {
                        <?php    
                        foreach ($sous_menus as $sous_menu) 
                        { ?>
                        document.getElementById("box_<?php echo $sous_menu->id_menu;?>").checked = true;
                        <?php  } ?>
                    }else
                    {
                        <?php    
                        foreach ($sous_menus as $sous_menu) 
                        { ?>
                        document.getElementById("box_<?php echo $sous_menu->id_menu;?>").checked = false;
                        <?php  } ?>
                    }
                }
                </script>

                <?php
                $compteur1 = 0;    
                foreach ($sous_menus as $sous_menu) 
                { 
                    $compteur1 ++;
                    if($compteur1 != 1)
                    {?>
 
                    <?php }?>      

                      <p><input type="checkbox" name="box_<?php echo $sous_menu->id_menu;?>" id="box_<?php echo $sous_menu->id_menu;?>"  onclick="toucher_fils_<?php echo $sous_menu->id_menu; ?>(this)" >
                      <label for="box_<?php echo $sous_menu->id_menu;?>"><span class="ui"></span><?php echo $sous_menu->nom;?></label></p>



                    <script language="javascript">
                    function toucher_fils_<?php echo $sous_menu->id_menu; ?>(box) 
                    {
                        if(box.checked == true)
                        {
                            document.getElementById("box_pere_<?php echo $compteur; ?>").checked = true;
                        }else
                        if(
                        <?php    
                        foreach ($sous_menus as $sous_menu) 
                        { ?>
                        (document.getElementById("box_<?php echo $sous_menu->id_menu;?>").checked == false) &&
                        <?php  } ?>
                            1 )
                        {
                            document.getElementById("box_pere_<?php echo $compteur; ?>").checked = false;
                        }
                    }
                    </script>
                
            <?php  } ?>
            
            </div>
            <?php } ?>



            

        </div>
        <div class="control-group">
        
            <input type="submit" name="valider_ajouter" value="Envoyer"/>
            <input type="reset" value="Réintialiser"/>
        </div>
    </form>
</div>



