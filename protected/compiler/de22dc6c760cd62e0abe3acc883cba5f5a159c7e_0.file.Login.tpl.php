<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 12:04:54
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Login.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c453d6ea6fd8_69229255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de22dc6c760cd62e0abe3acc883cba5f5a159c7e' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Login.tpl',
      1 => 1455707091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c453d6ea6fd8_69229255 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_2809056c453d6e704c2_23964255($_smarty_tpl);
?>



<?php 
new Block_extra_script_522756c453d6e9f2d8_49405605($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Login.tpl */
class Block_content_Column_2809056c453d6e704c2_23964255 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>


	<h2>Login</h2>

	<form action="index.php?req=Admin/User/Action/Login" method="post" id="loginForm">
		<label class="label label-default" for="usrname">Username</label>
		<input type="text" class="form-control" id="usrname" name="usrname" required />
		<br />
		<label class="label label-default" for="psword">Password</label>
		<input type="password" class="form-control" id="psword" name="psword" required />
		<br />
		<button class="btn btn-default">Effettua il login</button>
	</form>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
/* {block 'extra-script'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Login.tpl */
class Block_extra_script_522756c453d6e9f2d8_49405605 extends Smarty_Internal_Block
{
public $name = "extra-script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<?php echo '<script'; ?>
 type="text/javascript" src="public/js/vendor/jquery.form.js">
	$("#loginForm").validate();
<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'extra-script'} */
}
