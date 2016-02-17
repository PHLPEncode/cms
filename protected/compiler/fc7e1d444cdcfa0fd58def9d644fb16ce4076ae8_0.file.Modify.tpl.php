<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-15 11:45:15
  from "C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Action\Modify.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56c1ac3be75348_96144674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7e1d444cdcfa0fd58def9d644fb16ce4076ae8' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP\\data\\localweb\\cms\\protected\\tpl\\Admin\\Article\\Action\\Modify.tpl',
      1 => 1455532132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainLayout.tpl' => 1,
  ),
),false)) {
function content_56c1ac3be75348_96144674 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_Column_767656c1ac3be6d647_49312761($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:mainLayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content-Column'} C:\Program Files (x86)\EasyPHP\data\localweb\cms\protected\tpl\Admin\Article\Action\Modify.tpl */
class Block_content_Column_767656c1ac3be6d647_49312761 extends Smarty_Internal_Block
{
public $name = "content-Column";
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

	<?php echo $_smarty_tpl->tpl_vars['stringLog']->value;?>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content-Column'} */
}
