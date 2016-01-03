<?php /* Smarty version 3.1.27, created on 2015-10-21 10:37:24
         compiled from "D:\tools\xampp\htdocs\test\tpls\sys_function.html" */ ?>
<?php
/*%%SmartyHeaderCode:620356274ec44b4701_25795753%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a45459c77d4dae9831a1e9a7d3650e3813849e' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\sys_function.html',
      1 => 1445416640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '620356274ec44b4701_25795753',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56274ec44fe464_44874119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56274ec44fe464_44874119')) {
function content_56274ec44fe464_44874119 ($_smarty_tpl) {
if (!is_callable('smarty_function_select_date')) require_once 'D:/tools/xampp/htdocs/test/plugins\\function.select_date.php';
if (!is_callable('smarty_block_textarea')) require_once 'D:/tools/xampp/htdocs/test/plugins\\block.textarea.php';

$_smarty_tpl->properties['nocache_hash'] = '620356274ec44b4701_25795753';
?>
<!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<?php echo smarty_function_select_date(array('name'=>"start_time",'time'=>true,'value'=>''),$_smarty_tpl);?>
 <br>
<?php echo smarty_function_select_date(array('name'=>"end_time",'time'=>false,'value'=>"2012-10-10"),$_smarty_tpl);?>
 <br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>"article1",'toolbar'=>"full",'color'=>"blue",'height'=>"200")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>"article1",'toolbar'=>"full",'color'=>"blue",'height'=>"200"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>"article1",'toolbar'=>"full",'color'=>"blue",'height'=>"200"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>"article2",'toolbar'=>"basic",'color'=>"black",'height'=>"200")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>"article2",'toolbar'=>"basic",'color'=>"black",'height'=>"200"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>"article2",'toolbar'=>"basic",'color'=>"black",'height'=>"200"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>"article3",'toolbar'=>"full",'color'=>"blue",'height'=>"200")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>"article3",'toolbar'=>"full",'color'=>"blue",'height'=>"200"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>"article3",'toolbar'=>"full",'color'=>"blue",'height'=>"200"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>"article4",'toolbar'=>"desc",'color'=>"green",'height'=>"200")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>"article4",'toolbar'=>"desc",'color'=>"green",'height'=>"200"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>"article4",'toolbar'=>"desc",'color'=>"green",'height'=>"200"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>
<?php }
}
?>