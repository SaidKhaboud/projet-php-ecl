<div class="module">
<div class="module-head">
<h3>Liste des utilisateurs</h3>
</div>


                <div class="module-body">
            
                <?php 
                $compteur = 0;
                foreach ($users as $user) 
                {   
                    $compteur ++?>
                <?php if($compteur%2==1){ ?>
                <div class="row-fluid"> 
                <?php }?>
                <div class="span6">
                <div class="media user">
                <a class="media-avatar pull-left" href="#">
                    <img src="<?php if($user->image != NULL) echo URL_image . $_SESSION['id_user'] . '\\' . $user->image; else echo URL . 'img/cd-avatar.jpeg'; ?>"  />
                </a>
                <div class="media-body">
                <h3 class="media-title">     
                    <?php echo $user->nom.' '.$user->prenom; ?>
                </h3>
                <p>
                <small class="muted"><?php echo $this->model->get_profil_id($user->id_profil)->nom; ?></small></p>
                <p>
                <small class="muted"><?php echo $compteur; ?> <?php echo $user->login; ?></small></p>
                <p>
                <div class="media-option btn-group shaded-icon">
                <a href="<?php echo URL . 'user/supprimeruser/' . $user->id_user; ?>">
                <button class="btn btn-small">
                    <i class="icon-trash"></i>
                </button>
                </a>

                </div>
                </div>
                </div>
                </div>
                <?php if($compteur%2==0){ ?>
                </div> 
                <?php }?>                    

                <?php } ?>

</div>
</div>
</div>

        
        
        
        
