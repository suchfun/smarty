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
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56274ec46712b7_19440789',
  'cache_lifetime' => 30,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56274ec46712b7_19440789')) {
function content_56274ec46712b7_19440789 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<script src="./js/date/js/jscal2.js"></script>
   				 <script src="./js/date/js/lang/cn.js"></script>
   				 <link rel="stylesheet" type="text/css" href="./js/date/css/jscal2.css" />
    				<link rel="stylesheet" type="text/css" href="./js/date/css/border-radius.css" />
    				<link rel="stylesheet" type="text/css" href="./js/date/css/steel/steel.css" /><input type="text" name="start_time" id="start_time" value="" size="21" class="date" readonly>&nbsp;<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "start_time",
		    trigger    : "start_time",
		    dateFormat: "%Y-%m-%d %H:%M:%S",
		    showTime: 12,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script> <br>
<input type="text" name="end_time" id="end_time" value="2012-10-10" size="10" class="date" readonly>&nbsp;<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "end_time",
		    trigger    : "end_time",
		    dateFormat: "%Y-%m-%d",
		    showTime: false,
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script> <br>

<script type="text/javascript" src="./js/ckeditor/ckeditor.js"></script><script type="text/javascript">
CKEDITOR.replace( 'article1',{height:200,extraPlugins : 'uicolor',uiColor: 'blue',toolbar :
[
['Source','-','Templates'],
		    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
		    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],['ShowBlocks'],['Image','Capture','Flash'],['Maximize'],
		    '/',
		    ['Bold','Italic','Underline','Strike','-'],
		    ['Subscript','Superscript','-'],
		    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		    ['Link','Unlink','Anchor'],
		    ['Table','HorizontalRule','Smiley','SpecialChar'],
		    '/',
		    ['Styles','Format','Font','FontSize'],
		    ['TextColor','BGColor'],
		    ['attachment'],
]
});
</script><br>

<textarea name="article2"></textarea><script type="text/javascript">
CKEDITOR.replace( 'article2',{height:200,extraPlugins : 'uicolor',uiColor: 'black',toolbar :
[
['Bold', 'Italic','Underline','Strike','NumberedList', 'BulletedList', 'TextColor','BGColor', 'Link', 'Unlink', '-', 'Image','Flash','Table','Smiley','SpecialChar'],['RemoveFormat'],
		   
]
});
</script><br>

<textarea name="article3"></textarea><script type="text/javascript">
CKEDITOR.replace( 'article3',{height:200,extraPlugins : 'uicolor',uiColor: 'blue',toolbar :
[
['Source','-','Templates'],
		    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
		    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],['ShowBlocks'],['Image','Capture','Flash'],['Maximize'],
		    '/',
		    ['Bold','Italic','Underline','Strike','-'],
		    ['Subscript','Superscript','-'],
		    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		    ['Link','Unlink','Anchor'],
		    ['Table','HorizontalRule','Smiley','SpecialChar'],
		    '/',
		    ['Styles','Format','Font','FontSize'],
		    ['TextColor','BGColor'],
		    ['attachment'],
]
});
</script><br>

<textarea name="article4"></textarea><script type="text/javascript">
CKEDITOR.replace( 'article4',{height:200,extraPlugins : 'uicolor',uiColor: 'green',toolbar :
[
['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'Image', '-','Source'],
]
});
</script><br>
<?php }
}
?>