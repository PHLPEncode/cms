<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 12:02:27
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\mainLayout.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c453431bc856_16584825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a78c4ac396d634b643a9c868234a7f52d9227bf' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\mainLayout.tpl',
      1 => 1455706944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c453431bc856_16584825 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="it">
	<head>
		<meta name="charset" content="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['tplDescription']->value;?>
">
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['tplKeywords']->value;?>
">
		
		
		 <!--[if lt IE 9]>
    	  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      	  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    	<![endif]-->
		<link rel="stylesheet" href="public/css/vendor/bootstrap.css">
		<link rel="stylesheet" href="public/css/vendor/bootstrap-theme.css">
		<link rel="stylesheet" href="public/css/theme/base/theme.css">
		
		<title><?php echo $_smarty_tpl->tpl_vars['tplTitle']->value;?>
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
				<?php 
new Block_content_Column_1782356c45343181ec4_35572752($_smarty_tpl);
?>

			</div>
		</div>
	
	<?php echo '<script'; ?>
 type="text/javascript" src="public/js/vendor/jquery-1.12.0.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="public/js/vendor/bootstrap.js">
	
		$(document).ready(function() {
			$.bootstrap();
		})
		
	<?php echo '</script'; ?>
>
	<?php 
new Block_extra_script_1815656c453431a8fc9_24130258($_smarty_tpl);
?>

	</body>
</html><?php }
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\mainLayout.tpl */
class Block_content_Column_1782356c45343181ec4_35572752 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
/* {block 'extra-script'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\mainLayout.tpl */
class Block_extra_script_1815656c453431a8fc9_24130258 extends Smarty_Internal_Block
{
public $name = "extra-script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'extra-script'} */
}
