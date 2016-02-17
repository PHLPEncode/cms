<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-13 17:44:45
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Action\Insert.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bf5d7da5ec67_43825499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f233b4642d35d79a44b2d49d117517db8c15aac9' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\Article\\Action\\Insert.tpl',
      1 => 1455381878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56bf5d7da5ec67_43825499 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_591956bf5d7da56f65_97718730($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Action\Insert.tpl */
class Block_content_Column_591956bf5d7da56f65_97718730 extends Smarty_Internal_Block
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
