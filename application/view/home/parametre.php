

<div class="span9">
<div class="content">
<div class="module">
<div class="module-body">
<div class="module-head">
Informations sur le profil
</div>
<div class="profile-head media">
<a href="#" class="media-avatar pull-left">
<img src="<?php if($user->image != NULL) echo URL_image . $_SESSION['id_user'] . '\\' . $user->image; else echo URL . 'img/cd-avatar.jpeg'; ?>" class="image">
</a>

<div class="media-body">
		<h4> Nom d'Utilisateur: <small> <?php echo  $user->login ?></small></h4>
    	<h4> Nom:  <small><?php echo  $user->nom ?></small></h4>
    	<h4> Prénom: <small><?php  echo  $user->prenom ?></small></h4>	

</div>
</div>
</div>
</div>
</div>
</div>

