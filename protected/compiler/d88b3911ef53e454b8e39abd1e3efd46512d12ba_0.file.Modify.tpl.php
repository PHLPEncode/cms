<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-15 11:38:52
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Modify.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c1aabc8dc7a4_50502219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88b3911ef53e454b8e39abd1e3efd46512d12ba' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\Article\\Modify.tpl',
      1 => 1455532728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c1aabc8dc7a4_50502219 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_736956c1aabc8a9b13_95146261($_smarty_tpl);
?>


<?php 
new Block_extra_script_1223856c1aabc8d4aa8_77656723($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Modify.tpl */
class Block_content_Column_736956c1aabc8a9b13_95146261 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

	<form id="modifyForm" action="index.php?req=Admin/Article/Action/Modify" method="post">
		<input type="hidden" name="idPost" id="idPost" value="<?php echo $_smarty_tpl->tpl_vars['idPost']->value;?>
" />
		<label for="titlePost" class="label label-default">Inserisci il titolo del nuovo post</label>
		<input type="text" class="form-control" id="titlePost" name="titlePost" required minlenght="10" value="<?php echo $_smarty_tpl->tpl_vars['titlePost']->value;?>
" />
		<br />
		<label for="tagsPost" class="label label-default">Inserisci i tags per questo post (separati da una virgola)</label>
		<input type="text" class="form-control" name="tagsPost" id="tagsPost" value="<?php echo $_smarty_tpl->tpl_vars['tagsPost']->value;?>
" />
		<br />
		<label for="textPost" class="label label-default">Inserisci il testo</label>
		<br />
		<textarea id="textPost" name="textPost" class="form-control" rows="15" required minlenght="20"><?php echo $_smarty_tpl->tpl_vars['textPost']->value;?>
</textarea>
		<br />
		<label class="label label-default">Seleziona una categoria</label>
		<?php echo $_smarty_tpl->tpl_vars['selectList']->value;?>

		<br />
		<button class="btn btn-default">Modifica il post</button>
	</form>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
/* {block 'extra-script'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Modify.tpl */
class Block_extra_script_1223856c1aabc8d4aa8_77656723 extends Smarty_Internal_Block
{
public $name = "extra-script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="jquery.form.js">
	
		$("#postForm").validate();
	
	<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'extra-script'} */
}
