

    

        
           <div class="row">
            <form action="<?php echo URL; ?>profil/modifierdroitacces" method="POST">
            <div class="span9">
                    <div class="content">
                        <div class="module">
                        <div class="module-body">
                
                <ul class="profile-tab nav nav-tabs">
                <?php 
                    $compteur0=0;
                    foreach ($profils as $profil) 
                    { 
                    $compteur0++;
                    ?>
                    <?php if($compteur0 == 1){ ?>
                    <li class="active"><a href="#<?php echo 'box' . $profil->id_profil ?>" data-toggle="tab" ><?php echo $profil->nom; ?></a></li>  
                    <?php } else{ ?>
                    <li><a href="#<?php echo 'box' . $profil->id_profil ?>" data-toggle="tab" ><?php echo $profil->nom; ?></a></li> 
                    <?php } ?>
                <?php } ?>
                </ul>

                
                <div class="profile-tab-content tab-content">
            
                <?php 
                $compteur1 = 0;
                foreach ($profils as $profil) 
                { 
                    $compteur1 ++;?>
                    <?php if($compteur1 == 1){ ?>
                    <div class="tab-pane fade active in" id="<?php echo 'box' . $profil->id_profil ?>" >
                    <?php } else{ ?> 
                    <div class="tab-pane fade" id="<?php echo 'box' . $profil->id_profil ?>" >
                    <?php } ?>
                    <div class="le_menu">
                    <?php 
                    $compteur2 = 0;
                    foreach ($all_menus as $all_menu) 
                    { 
                        $compteur2 ++;
                        $sous_menus = $this->model->get_all_sous_menu($all_menu->id_menu);
                        ?>
                        <div class="un_menu">
                        <p><input type="checkbox" onclick="toucher_pere_<?php echo $compteur1 . '_' . $compteur2; ?>(this)" id="box_pere_<?php echo $compteur1 . '_' . $compteur2; ?>" <?php if( $this->model->verifier_droit_acces($all_menu->id_menu, '', $profil->id_profil) == true) echo 'checked';?> > 
                        <label for="box_pere_<?php echo $compteur1 . '_' . $compteur2; ?>"><span class="ui"></span><?php echo $all_menu->nom;?></label></p>

                        <script language="javascript">
                        function toucher_pere_<?php echo $compteur1 . '_' . $compteur2; ?>(box) 
                        {
                            if(box.checked == true)
                            {
                                <?php    
                                foreach ($sous_menus as $sous_menu) 
                                { ?>
                                document.getElementById("<?php echo 'box_' . $profil->id_profil . '_' . $sous_menu->id_menu;?>").checked = true;
                                <?php  } ?>
                            }else
                            {
                                <?php    
                                foreach ($sous_menus as $sous_menu) 
                                { ?>
                                document.getElementById("<?php echo 'box_' . $profil->id_profil . '_' . $sous_menu->id_menu;?>").checked = false;
                                <?php  } ?>
                            }
                        }
                        </script>
                        
                        <?php    
                            $compteur3 = 0; 
                            foreach ($sous_menus as $sous_menu) 
                            { 
                                $compteur3 ++;
                                if($compteur3 != 1)
                                {?>
                                     
                                <?php }?> 
                                        
                                <p> <input type="checkbox" name="<?php echo 'box_' . $profil->id_profil . '_' . $sous_menu->id_menu;?>" id= "<?php echo 'box_' . $profil->id_profil . '_' . $sous_menu->id_menu;?>" onclick="toucher_fils_<?php echo $profil->id_profil .'_'. $sous_menu->id_menu; ?>(this)" <?php if( $this->model->verifier_droit_acces($sous_menu->id_menu, '', $profil->id_profil) == true) echo 'checked';?> />
                                <label for="<?php echo 'box_' . $profil->id_profil . '_' . $sous_menu->id_menu;?>"><span class="ui"></span><?php echo $sous_menu->nom;?></label></p>
                              
                                <script language="javascript">
                                function toucher_fils_<?php echo $profil->id_profil .'_'. $sous_menu->id_menu; ?>(box) 
                                {
                                    if(box.checked == true)
                                    {
                                        document.getElementById("box_pere_<?php echo $compteur1 . '_' . $compteur2; ?>").checked = true;
                                    }else
                                    if(
                                    <?php    
                                    foreach ($sous_menus as $sous_menu) 
                                    { ?>
                                    (document.getElementById("<?php echo 'box_' . $profil->id_profil . '_' . $sous_menu->id_menu;?>").checked == false) &&
                                    <?php  } ?>
                                        1 )
                                    {
                                        document.getElementById("box_pere_<?php echo $compteur1 . '_' . $compteur2; ?>").checked = false;
                                    }
                                }
                                </script> 

                        <?php  } ?>
                        </div>
                    <?php } ?>
                    </div>
                    </div>
                    <?php } ?>

                </div>

            </div>

            </div>
            </div>

        </div>
    <div class="box">
                <table>
                    <input type="hidden" id= "nom_profil" name="nom_profil" value="<?php echo $nom;?>" />
                    <tr><td><input type="submit" name="valider_modifierdroitacces" value="Valider" /></td></tr>
                </table>
    </div>

    </form>
</div>


