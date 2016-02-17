<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-13 17:49:43
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\404.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bf5ea72bdb61_89289662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e68b199377ecbe088b77ff9b3585130bef08c518' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\404.tpl',
      1 => 1455368195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56bf5ea72bdb61_89289662 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_2403056bf5ea72b1fe9_68903599($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\404.tpl */
class Block_content_Column_2403056bf5ea72b1fe9_68903599 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

	<h2>Error 404</h2>
	The requested page not exist.Verify the URL.
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
}
