<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <title>GESTION DU STOCK</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="iso-8859-1"/>

    <link type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo URL; ?>css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo URL; ?>images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    
</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" >
			  		Gestion de stock
			  	</a>

			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action= "<?php echo URL; ?>" method="POST">
						<div class="module-head">  
                            <h3>Page de connexion</h3>
                        </div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
                                    <input type="text" class="span12"  value="<?php echo $login;?>" name="login" placeholder="Votre Identifiant" id="UserName" required>
                                </div>
                            </div>
							<div class="control-group">
								<div class="controls row-fluid">
                                    <input type="password" class="span12" name="pwd" placeholder="Votre Mot de Passe" id="Passwod" required>
                                    <div>
                                        <small id="passwordHelp" class="text-danger" class="alert" >
                                        <?php if($wrong_login == true) echo "Cet Identifiant est invalide."; elseif ($wrong_password == true) echo "Ce mot de passe est incorrect. Vérifiez que vous avez entrer le bon mot de passe..";  ?>
                                        </<small >
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="connecter" >Se connecter</button>

								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>

<script src='<?php echo URL; ?>js/jquery.min.js'></script>
<script src="<?php echo URL; ?>js/main3.js"></script>
    
</body>

</html>
