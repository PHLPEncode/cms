<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 10:22:00
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Home.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c43bb88e9a34_68296717',
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
function content_56c43bb88e9a34_68296717 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1434656c43bb7a5c879_53137936';
?>


<?php 
new Block_content_Column_626756c43bb88ddeb9_60701287($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Home.tpl */
class Block_content_Column_626756c43bb88ddeb9_60701287 extends Smarty_Internal_Block
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
