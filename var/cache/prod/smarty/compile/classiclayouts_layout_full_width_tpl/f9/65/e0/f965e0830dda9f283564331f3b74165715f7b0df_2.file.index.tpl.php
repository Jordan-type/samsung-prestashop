<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 00:28:15
  from 'C:\xampp\htdocs\2020-Projects\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffe146f86eaf7_41451135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f965e0830dda9f283564331f3b74165715f7b0df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2020-Projects\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1606911182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffe146f86eaf7_41451135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16774618735ffe146f86c621_67710504', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_6604616145ffe146f86cc11_73476931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_15549075075ffe146f86d844_94813096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3121457335ffe146f86d3f2_51043961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15549075075ffe146f86d844_94813096', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16774618735ffe146f86c621_67710504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16774618735ffe146f86c621_67710504',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6604616145ffe146f86cc11_73476931',
  ),
  'page_content' => 
  array (
    0 => 'Block_3121457335ffe146f86d3f2_51043961',
  ),
  'hook_home' => 
  array (
    0 => 'Block_15549075075ffe146f86d844_94813096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6604616145ffe146f86cc11_73476931', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3121457335ffe146f86d3f2_51043961', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
