<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 12:00:35
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\New.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c452d30b91b4_49157746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1358203359929dfb9f4410ad58069835040ebe82' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\Article\\New.tpl',
      1 => 1455702287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c452d30b91b4_49157746 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_2019856c452d307a9a2_63692073($_smarty_tpl);
?>



<?php 
new Block_extra_script_2359156c452d30b14b0_08760863($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\New.tpl */
class Block_content_Column_2019856c452d307a9a2_63692073 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

	<h2>Scrivi un nuovo post</h2>
	<form id="postForm" method="post" action="index.php?req=Admin/Article/Action/Insert">
		<label for="titlePost" class="label label-default">Inserisci il titolo del nuovo post</label>
		<input type="text" class="form-control" id="titlePost" name="titlePost" required minlenght="10" />
		<br />
		<label for="tagsPost" class="label label-default">Inserisci i tags per questo post (separati da una virgola)</label>
		<input type="text" class="form-control" name="tagsPost" id="tagsPost" />
		<br />
		<label for="textPost" class="label label-default">Inserisci il testo</label>
		<br />
		<textarea id="textPost" name="textPost" class="form-control" rows="15" required minlenght="20"></textarea>
		<br />
		<label class="label label-default">Seleziona una categoria</label>
		<?php echo $_smarty_tpl->tpl_vars['selectList']->value;?>

		<br />
		<button class="btn btn-default">Inserisci il nuovo post</button>
	</form>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
/* {block 'extra-script'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\New.tpl */
class Block_extra_script_2359156c452d30b14b0_08760863 extends Smarty_Internal_Block
{
public $name = "extra-script";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="public/js/vendor/jquery.form.js">
	
		$("#postForm").validate();
	
	<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'extra-script'} */
}
