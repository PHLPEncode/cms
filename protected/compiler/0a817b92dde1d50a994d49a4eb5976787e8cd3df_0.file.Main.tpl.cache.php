<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 10:22:06
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Main.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c43bbecafe08_57564574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a817b92dde1d50a994d49a4eb5976787e8cd3df' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\Article\\Main.tpl',
      1 => 1455377598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c43bbecafe08_57564574 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1650956c43bbebe4bd2_15882720';
?>


<?php 
new Block_content_Column_1521856c43bbeca8108_79164255($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Main.tpl */
class Block_content_Column_1521856c43bbeca8108_79164255 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>


	<h2>Gestione dei post</h2>

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Titolo</th>
				<th>Autore</th>
				<th>Stato</th>
				<th>Azioni</th>
			</tr>
		</thead>
		
		<tbody>
			<?php echo $_smarty_tpl->tpl_vars['managePostList']->value;?>

		</tbody>
		
	</table>
	
	<a href="index.php?req=Admin/Article/New"><button class='btn btn-default'>+ Aggiungi un nuovo post</button></a>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
}
