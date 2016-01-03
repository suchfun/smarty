<?php /* Smarty version 3.1.27, created on 2015-09-13 13:44:56
         compiled from "D:\tools\xampp\htdocs\test\tpls\modifier.html" */ ?>
<?php
/*%%SmartyHeaderCode:616855f561b881edd9_63697839%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c52cc1db4c55479e758dc80c646e77efb2b1f33' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\modifier.html',
      1 => 1442144689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '616855f561b881edd9_63697839',
  'variables' => 
  array (
    'var' => 0,
    'var2' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f561b891bc83_95656544',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f561b891bc83_95656544')) {
function content_55f561b891bc83_95656544 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'D:\\tools\\xampp\\htdocs\\test\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\tools\\xampp\\htdocs\\test\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '616855f561b881edd9_63697839';
echo $_smarty_tpl->tpl_vars['var']->value;?>
<br>
<!--  以  变量|函数名的形式   使用调解器 -->
<?php echo test($_smarty_tpl->tpl_vars['var']->value);?>
<br>
<?php echo test($_smarty_tpl->tpl_vars['var']->value,'red');?>
<br>
<?php echo test($_smarty_tpl->tpl_vars['var']->value,'blue','10');?>
<br>
<!-- 直接调用php的函数 -->
<?php echo substr($_smarty_tpl->tpl_vars['var']->value,0,10);?>
<br>
<!-- 直接将php的函数变成调解器（前提是：php函数的第一个参数是要改变的额变量本身） -->
<?php echo substr($_smarty_tpl->tpl_vars['var']->value,'0','10');?>
<br>
<!-- 将所哦有的数字替换成# -->
<?php echo demo($_smarty_tpl->tpl_vars['var']->value,'/\d/','#');?>
<br>
<!-- 组合调解器 <?php echo substr(test($_smarty_tpl->tpl_vars['var']->value,'green',20),'0','10');?>
<br>-->
<?php echo substr(test($_smarty_tpl->tpl_vars['var']->value,'green',20),'0','10');?>
<br>

<?php echo demo(test(substr($_smarty_tpl->tpl_vars['var']->value,0,10),'green',7),'/[12]/','@');?>
<br>

<!-- 系统自带的调解器 ，详细查看文档-->
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['var2']->value);?>
<br>
<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
<br>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value);?>
<br><!-- 后面可以加各种格式作为参数，参考文档 -->
<?php }
}
?>