<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-17 11:55:05
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Action\New.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c45189a8d5d3_73141869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeeec06e2abab863e1ecd5a402bed734a8b50648' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\User\\Action\\New.tpl',
      1 => 1455705614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c45189a8d5d3_73141869 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1376556c451899c23a9_81472478';
?>



<?php 
new Block_content_Column_693856c45189a81a44_29744208($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\User\Action\New.tpl */
class Block_content_Column_693856c45189a81a44_29744208 extends Smarty_Internal_Block
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
