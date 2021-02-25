<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 00:28:15
  from 'C:\xampp\htdocs\2020-Projects\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffe146f9fe490_86236468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b677099257f1e2f8e1b3cc3fe83e4e310b2fa41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2020-Projects\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1606911182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffe146f9fe490_86236468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20938714275ffe146f9ef9c8_66568228', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1964877805ffe146f9f0520_29420954 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14818326225ffe146f9eff40_99905512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1964877805ffe146f9f0520_29420954', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4807168895ffe146f9f9a59_33953088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11830007675ffe146f9fac22_31035101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14934536855ffe146f9f90c2_46078682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4807168895ffe146f9f9a59_33953088', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11830007675ffe146f9fac22_31035101', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_19778962075ffe146f9fccb1_20326204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_6098869495ffe146f9fbf90_61665454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19778962075ffe146f9fccb1_20326204', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20938714275ffe146f9ef9c8_66568228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20938714275ffe146f9ef9c8_66568228',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14818326225ffe146f9eff40_99905512',
  ),
  'page_title' => 
  array (
    0 => 'Block_1964877805ffe146f9f0520_29420954',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14934536855ffe146f9f90c2_46078682',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4807168895ffe146f9f9a59_33953088',
  ),
  'page_content' => 
  array (
    0 => 'Block_11830007675ffe146f9fac22_31035101',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_6098869495ffe146f9fbf90_61665454',
  ),
  'page_footer' => 
  array (
    0 => 'Block_19778962075ffe146f9fccb1_20326204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14818326225ffe146f9eff40_99905512', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14934536855ffe146f9f90c2_46078682', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6098869495ffe146f9fbf90_61665454', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
