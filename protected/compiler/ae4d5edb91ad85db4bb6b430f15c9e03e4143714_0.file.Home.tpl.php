<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-15 11:59:28
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Home.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c1af90d00353_00896567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae4d5edb91ad85db4bb6b430f15c9e03e4143714' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Home.tpl',
      1 => 1455533965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c1af90d00353_00896567 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_2592956c1af90cf8647_59522965($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Home.tpl */
class Block_content_Column_2592956c1af90cf8647_59522965 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>


	<h2>Welcome in Modern CMS</h2>
	
	<h3>Take a tour</h3>
	<a href="index.php?req=Admin/Article/Main">Gestisci gli articoli</a>
	<br />
	<a href="index.php?req=Admin/User/Main">Gestisci gli utenti</a>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
}
