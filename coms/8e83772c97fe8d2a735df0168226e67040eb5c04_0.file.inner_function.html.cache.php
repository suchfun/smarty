<?php /* Smarty version 3.1.27, created on 2015-09-13 14:09:26
         compiled from "D:\tools\xampp\htdocs\test\tpls\inner_function.html" */ ?>
<?php
/*%%SmartyHeaderCode:2736455f56776c30b00_21718133%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e83772c97fe8d2a735df0168226e67040eb5c04' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\inner_function.html',
      1 => 1442146163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2736455f56776c30b00_21718133',
  'variables' => 
  array (
    'one' => 0,
    'two' => 0,
    'three' => 0,
    'four' => 0,
    'five' => 0,
    'six' => 0,
    'seven' => 0,
    'a' => 0,
    'foo' => 0,
    'start' => 0,
    'end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f567773053a7_24496439',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f567773053a7_24496439')) {
function content_55f567773053a7_24496439 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2736455f56776c30b00_21718133';
?>
<!--  模板内置函数的变量声明和流程控制 -->
<?php $_smarty_tpl->tpl_vars["one"] = new Smarty_Variable("111111111", null, 0);?>
<?php $_smarty_tpl->tpl_vars["two"] = new Smarty_Variable("2222222", null, 0);?>
<?php $_smarty_tpl->tpl_vars['three'] = new Smarty_Variable("3333", null, 0);?>

<?php $_smarty_tpl->tpl_vars["four"] = new Smarty_Variable(array(1,2,3,4444), null, 0);?>
<?php $_smarty_tpl->tpl_vars["five"] = new Smarty_Variable(array('y'=>'yellow','b'=>'bili'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['six'] = new Smarty_Variable($_smarty_tpl->tpl_vars['one']->value+$_smarty_tpl->tpl_vars['two']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['seven'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['one']->value)."+".((string)$_smarty_tpl->tpl_vars['two']->value), null, 0);?>

<?php echo $_smarty_tpl->tpl_vars['one']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['three']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['four']->value[3];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['five']->value['b'];
echo $_smarty_tpl->tpl_vars['five']->value['b'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['six']->value;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['seven']->value;?>
<br>
<br><br><br><br><br><br><br>
--------------else   if----------------<br>
<!-- smarty3中没有swich case,可以利用else if 的嵌套哦实现  -->
<!--   '==' -> 'eq','!=' -> 'neq'  ,'>'->'gt','<'->'lt'  ,'!'->'not  '    ,'%'->'mod'  更多参考文档中模板设计片->内置函数->elseif -->
<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable(12, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value == 10) {?>
	equal 10~<br>
<?php } elseif ($_smarty_tpl->tpl_vars['a']->value == 11) {?>
	equal 11~<br>
<?php } else { ?>
	not equal~<br>
<?php }?>
------------------for----------------<br>
<ul>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
		<?php }} ?>
</ul>
<br>
<ul>
	<?php $_smarty_tpl->tpl_vars['start'] = new Smarty_Variable(1, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['end'] = new Smarty_Variable(10, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 2;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),3);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?><!-- 注意：step 后面不加'=',max后面要'=' ;且for中变量默认是递增的,就是说start要大鱼等于end,如果小于则执行forelse-->
		<li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
	<?php }} else { ?>
		##########<br>
	<?php }  ?>
</ul><br>
-------------------while--------------<br>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(10, null, 0);?>
<?php while ($_smarty_tpl->tpl_vars['foo']->value > 0) {?>
	<?php echo $_smarty_tpl->tpl_vars['foo']->value--;?>
<br>
<?php }
}
}
?>