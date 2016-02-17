<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 11:56:05
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Main.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c451c53f38c9_98650654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9a5da63dfd95aaa3121d507bd5b9fc319b06ee6' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\User\\Main.tpl',
      1 => 1455706491,
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
function content_56c451c53f38c9_98650654 ($_smarty_tpl) {
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
		
		<title>ModernCMS | Amministrazione - Gestione utenti</title>
		
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
				
	<h2>Gestione degli utenti</h2>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Ultimo accesso</th>
				<th>Azioni</th>
			</tr>
		</thead>
		
		
		<tbody>
			<tr>
							<td>1</td>
							<td>admin</td>
							<td>philipencode@gmail.com</td>
							<td>2016-02-13</td>
							<td><a href='index.php?req=Admin/User/Action/Remove&id=1'><button class='btn btn-default'>Rimuovi</button></a></td>
					</tr><tr>
							<td>2</td>
							<td>LOLLO</td>
							<td>porcodio@mail.com</td>
							<td>0000-00-00</td>
							<td><a href='index.php?req=Admin/User/Action/Remove&id=2'><button class='btn btn-default'>Rimuovi</button></a></td>
					</tr>
		</tbody>
	</table>
	
	<a href="#" class="btn btn-default" id="showuserpanel">+ Aggiungi un nuovo utente</a>
	<br /><br />
	<div id="newuserpanel" class="panel panel-default">
		<div class="panel-body">
			<h3>Crea un nuovo utente</h3>
			<form action="index.php?req=Admin/User/Action/New" method="post" id="newuserform">
				<label class="label label-default">Username</label>
				<input class="form-control" type="text" id="usrname" name="usrname" required />
				<br />
				<label class="label label-default">Password</label>
				<input class="form-control" type="password" id="psword" name="psword" required />
				<br />
				<label class="label label-default">Email</label>
				<br />
				<input class="form-control" type="email" id="email" name="email" required />
				<br />
				<button class="btn btn-default">Crea nuovo utente</button>
				<a href="#" id="closeuserpanel" class="btn btn-default">Chiudi</a>
			</form>
		</div>
	</div>
	

			</div>
		</div>
	
	<script type="text/javascript" src="public/js/vendor/jquery-1.12.0.js"></script>
	<script type="text/javascript" src="public/js/vendor/bootstrap.js">
	
		$(document).ready(function() {
			$.bootstrap();
		})
		
	</script>
	
<script type="text/javascript" src="public/js/admin/user/showuserpanel.js"></script>
<script type="text/javascript" src="public/js/vendor/jquery.form.js">
	$("#newuserform").validate();
</script>

	</body>
</html><?php }
}
