<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 11:56:30
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Action\Remove.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c451de364b06_09824949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11fcc8eaeb7178cb9d088aa316ccf2d6279fbeaf' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\User\\Action\\Remove.tpl',
      1 => 1455616260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c451de364b06_09824949 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_2256856c451de358f77_66388275($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Action\Remove.tpl */
class Block_content_Column_2256856c451de358f77_66388275 extends Smarty_Internal_Block
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
