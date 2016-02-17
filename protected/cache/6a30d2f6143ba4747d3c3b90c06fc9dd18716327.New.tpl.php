<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 11:55:05
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Action\New.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c45189aac9d4_35027043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeeec06e2abab863e1ecd5a402bed734a8b50648' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\User\\Action\\New.tpl',
      1 => 1455705614,
      2 => 'file',
    ),
    '3a78c4ac396d634b643a9c868234a7f52d9227bf' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\mainLayout.tpl',
      1 => 1455704070,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_56c45189aac9d4_35027043 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="it">
	<head>
		<meta name="charset" content="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<br />
<b>Notice</b>:  Undefined index: tplDescription in <b>C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\compiler\3a78c4ac396d634b643a9c868234a7f52d9227bf_0.file.mainLayout.tpl.cache.php</b> on line <b>32</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\compiler\3a78c4ac396d634b643a9c868234a7f52d9227bf_0.file.mainLayout.tpl.cache.php</b> on line <b>32</b><br />
">
		<meta name="keywords" content="<br />
<b>Notice</b>:  Undefined index: tplKeywords in <b>C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\compiler\3a78c4ac396d634b643a9c868234a7f52d9227bf_0.file.mainLayout.tpl.cache.php</b> on line <b>34</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\compiler\3a78c4ac396d634b643a9c868234a7f52d9227bf_0.file.mainLayout.tpl.cache.php</b> on line <b>34</b><br />
">
		
		
		 <!--[if lt IE 9]>
    	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
		<link rel="stylesheet" href="public/css/vendor/bootstrap.css">
		<link rel="stylesheet" href="public/css/vendor/bootstrap-theme.css">
		<link rel="stylesheet" href="public/css/theme/base/theme.css">
		
		<title><br />
<b>Notice</b>:  Undefined index: tplTitle in <b>C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\compiler\3a78c4ac396d634b643a9c868234a7f52d9227bf_0.file.mainLayout.tpl.cache.php</b> on line <b>50</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\compiler\3a78c4ac396d634b643a9c868234a7f52d9227bf_0.file.mainLayout.tpl.cache.php</b> on line <b>50</b><br />
</title>
		
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
				</ul>
				
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Inserisci i tag per la ricerca" />
						<a href="index.php?req=Search"><button class="btn btn-default">Cerca</button></a>
					</div>
				</form>
				
			</div>
		</nav>
		<div class="container">
			<div class="col-xs-12 col-md-8">
				
	
						<div class='alert alert-success'>
							<b>Operazione riuscita</b>
							L'utente è stato correttamente inserito
							all'interno del database.
						</div>

			</div>
		</div>
	
	<script type="text/javascript" src="public/js/vendor/jquery-1.12.0.js"></script>
	<script type="text/javascript" src="public/js/vendor/bootstrap.js">
	
		$(document).ready(function() {
			$.bootstrap();
		})
		
	</script>
	
	</body>
</html><?php }
}
