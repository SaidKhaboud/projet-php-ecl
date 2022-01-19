<?php
$user = $this->model->get_user_id($_SESSION['id_user']);
$menus_user = $this->model->get_all_menu_user($_SESSION['id_user']);
if($menus_user == 1)
{
    header('location: ' . URL . 'home/deconnection');
}?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
	<meta charset="iso-8859-1"/>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

    <link type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo URL; ?>css/theme.css" rel="stylesheet">
    <link type="text/css" href="<?php echo URL; ?>images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>  
    <link type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo URL; ?>css/button.css" rel="stylesheet">
    <link type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script src="<?php echo URL; ?>scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>scripts/common.js" type="text/javascript"></script>
    <style>
    body    {overflow-y:scroll;}
    </style>

  	
	<title>Gestion de Stock</title>
    
</head>

<body>
	<header class="cd-main-header">
		<a href="<?php echo URL; ?>" class="cd-logo"><img src="<?php echo URL; ?>img/cd-logo.png" alt="Logo"></a>
		
		<!-- <div class="cd-search is-hidden">
			<form action="#">
				<input type="search" placeholder="Search...">
			</form>
		</div>  cd-search -->

		<a href="#" class="cd-nav-trigger"><span></span></a>


	</header> 
            <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo URL; ?>">Gestion de stock </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        
                        <ul class="nav pull-right">
                            <li> <?php echo $user->login; ?> </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php if($user->image != NULL) echo URL_image . $_SESSION['id_user'] . '\\' . $user->image; else echo URL . 'img/cd-avatar.jpeg'; ?>" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo URL; ?>home/parametre">Informations</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo URL; ?>home/deconnection">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>


        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                <!-- navigation -->

                <?php
                $num = 0;
                foreach ($menus_user as $menu)
                             
                { $num++;?>
                <ul class="widget widget-menu unstyled">
                <?php  echo '<li><a class="collapsed" data-toggle="collapse" href="#togglePages'.$num.'"><i class="menu-icon icon-cog"></i>
                <i class="icon-chevron-down pull-right"></i>
                <i class="icon-chevron-up pull-right"></i>' . $menu->nom . '</a>
                <ul id="togglePages'.$num.'" class="collapse unstyled">
                ';

                    $sous_menus = $this->model->get_all_sous_menu_user($_SESSION['id_user'], $menu->id_menu);

                    foreach ($sous_menus as $sous_menu) 
                    { 
                        echo '<li><a href="' .  URL . $sous_menu->lien . '"><i class="icon-inbox"></i>' . $sous_menu->nom . '</a></li>
                        ';
                    }

                    echo '</ul></li></ul>
                    
                    ';
                }?>

                    
                    </div>
                </div>
                <div class="span9">
                    <div class="content">
                        
		<div class="content-wrapper">
            






			



