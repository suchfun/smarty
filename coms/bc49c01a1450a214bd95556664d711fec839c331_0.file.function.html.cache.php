<?php /* Smarty version 3.1.27, created on 2015-09-13 13:58:24
         compiled from "D:\tools\xampp\htdocs\test\tpls\function.html" */ ?>
<?php
/*%%SmartyHeaderCode:2671055f564e02d5266_33349716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc49c01a1450a214bd95556664d711fec839c331' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\function.html',
      1 => 1442145497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2671055f564e02d5266_33349716',
  'variables' => 
  array (
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f564e0a42072_28636142',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f564e0a42072_28636142')) {
function content_55f564e0a42072_28636142 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_funone')) require_once 'D:/tools/xampp/htdocs/test/plugins\\modifier.funone.php';
if (!is_callable('smarty_function_funtwo')) require_once 'D:/tools/xampp/htdocs/test/plugins\\function.funtwo.php';
if (!is_callable('smarty_block_funthree')) require_once 'D:/tools/xampp/htdocs/test/plugins\\block.funthree.php';

$_smarty_tpl->properties['nocache_hash'] = '2671055f564e02d5266_33349716';
echo smarty_modifier_funone($_smarty_tpl->tpl_vars['var']->value);?>
 <br>

<?php echo smarty_function_funtwo(array('color'=>"green",'size'=>"7",'content'=>"1111111111111"),$_smarty_tpl);?>
 <br>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('funthree', array('color'=>"blue",'size'=>"2")); $_block_repeat=true; echo smarty_block_funthree(array('color'=>"blue",'size'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	2222222222222222 

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_funthree(array('color'=>"blue",'size'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>
<?php }
}
?>