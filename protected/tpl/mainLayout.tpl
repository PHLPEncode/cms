<!DOCTYPE html>
<html lang="it">
	<head>
		<meta name="charset" content="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="{%= $tplDescription %}">
		<meta name="keywords" content="{%= $tplKeywords %}">
		
		
		 <!--[if lt IE 9]>
    	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
		<link rel="stylesheet" href="public/css/vendor/bootstrap.css">
		<link rel="stylesheet" href="public/css/vendor/bootstrap-theme.css">
		<link rel="stylesheet" href="public/css/theme/base/theme.css">
		
		<title>{%= $tplTitle %}</title>
		
	</head>
	
	
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown">Articoli</a>
						<ul class="dropdown-menu">
							<li><a href="index.php?req=Admin/Article/New">Scrivi un nuovo articolo</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="index.php?req=Admin/Article/Main">Gestisci gli articoli</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown">Utenti</a>
						<ul class="dropdown-menu">
							<li><a href="index.php?req=Admin/User/Main">Gestisci gli utenti</a></li>
						</ul>
					</li>
					<li><a href="index.php?req=Login">Effettua il login</a></li>
				</ul>
				
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Inserisci le parole chiave per la ricerca" />
						<a href="index.php?req=Search"><button class="btn btn-default">Cerca</button></a>
					</div>
				</form>
				
			</div>
		</nav>
		<div class="container">
			<div class="col-xs-12 col-md-8">
				{%= block name="content-Column" %}{%= /block %}
			</div>
		</div>
	
	<script type="text/javascript" src="public/js/vendor/jquery-1.12.0.js"></script>
	<script type="text/javascript" src="public/js/vendor/bootstrap.js">
	
		$(document).ready(function() {
			$.bootstrap();
		})
		
	</script>
	{%= block name="extra-script" %}{%= /block %}
	</body>
</html>