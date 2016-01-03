<?php /* Smarty version 3.1.27, created on 2015-09-13 13:34:24
         compiled from "D:\tools\xampp\htdocs\test\tpls\demo2.html" */ ?>
<?php
/*%%SmartyHeaderCode:2180455f55f4037d769_80171613%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd2e5aa04ccacd3b7a8b3321861fb48284789391' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\demo2.html',
      1 => 1442144061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2180455f55f4037d769_80171613',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f55f40447242_10092157',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f55f40447242_10092157')) {
function content_55f55f40447242_10092157 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2180455f55f4037d769_80171613';
?>
title: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<br>
content: <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<br>


<?php echo myfun();?>
 <br>
<?php echo date("Y-m-d");?>
<br>




<?php echo test(array('size'=>"10",'color'=>"red",'num'=>"5",'content'=>"222"),$_smarty_tpl);?>
 <br>
<?php }
}
?>