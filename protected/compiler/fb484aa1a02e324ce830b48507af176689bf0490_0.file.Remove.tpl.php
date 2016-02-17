<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-13 18:02:36
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Action\Remove.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bf61acbf60e5_76050754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb484aa1a02e324ce830b48507af176689bf0490' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\Article\\Action\\Remove.tpl',
      1 => 1455382531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56bf61acbf60e5_76050754 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_797456bf61acbee3e2_62792180($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Action\Remove.tpl */
class Block_content_Column_797456bf61acbee3e2_62792180 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

	<?php echo $_smarty_tpl->tpl_vars['messageLog']->value;?>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
}
