<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 11:54:57
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Main.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c451815c8c11_00546691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9a5da63dfd95aaa3121d507bd5b9fc319b06ee6' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\User\\Main.tpl',
      1 => 1455706491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c451815c8c11_00546691 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1341056c451814cebe0_73729722';
?>


<?php 
new Block_content_Column_2302756c45181595f81_57332770($_smarty_tpl);
?>



<?php 
new Block_extra_script_171256c451815c0f14_17935419($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Main.tpl */
class Block_content_Column_2302756c45181595f81_57332770 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

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
			<?php echo $_smarty_tpl->tpl_vars['manageUserList']->value;?>

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
	
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
/* {block 'extra-script'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Main.tpl */
class Block_extra_script_171256c451815c0f14_17935419 extends Smarty_Internal_Block
{
public $name = "extra-script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<?php echo '<script'; ?>
 type="text/javascript" src="public/js/admin/user/showuserpanel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="public/js/vendor/jquery.form.js">
	$("#newuserform").validate();
<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'extra-script'} */
}
