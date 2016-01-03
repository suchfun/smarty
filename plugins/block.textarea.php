<?php
	/**
	 * 编辑器
	 * @param int $textareaid
	 * @param int $toolbar    有basic full 和desc三种
	 * @param int $color 编辑器颜色
	 * @param string $alowuploadexts 允许上传类型
	 * @param string $height 编辑器高度
	 * @param string $disabled_page 是否禁用分页和子标题
	 */

function smarty_block_textarea($args, $content, $smarty, &$repeat){
	if(!$repeat) {
		$textareaid=$args["name"];	   //编辑器的名字
		$toolbar = !empty($args['toolbar']) ? $args['toolbar'] : "basic";  //编辑器的类型full , basic
		$height = !empty($args['height']) ? $args['height'] : 200;  //编辑器的高度
		$color = !empty($args['color']) ? $args['color'] : '';  //编辑器的颜色

		$str ='<textarea name="'.$textareaid.'"></textarea>';
		if(!defined('EDITOR_INIT')) {
			$str = '<script type="text/javascript" src="./js/ckeditor/ckeditor.js"></script>';
			define('EDITOR_INIT', 1);
		}
	
		if($toolbar == 'basic') {
			$toolbar = "['Bold', 'Italic','Underline','Strike','NumberedList', 'BulletedList', 'TextColor','BGColor', 'Link', 'Unlink', '-', 'Image','Flash','Table','Smiley','SpecialChar'],['RemoveFormat'],
		   \r\n";
		} elseif($toolbar == 'full') {
		   $toolbar = "['Source','-','Templates'],
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
		    ['attachment'],\r\n";
		  
		} elseif($toolbar == 'desc') {
			$toolbar = "['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'Image', '-','Source'],\r\n";
		
		} else {
			$toolbar = '';
		}
		$str .= "<script type=\"text/javascript\">\r\n";
		$str .= "CKEDITOR.replace( '$textareaid',{";

	


		$str .= "height:{$height},";
	
	
		if($color) {
			$str .= "extraPlugins : 'uicolor',uiColor: '$color',";
		}
	
		$str .= "toolbar :\r\n";
		$str .= "[\r\n";
		$str .= $toolbar;
		$str .= "]\r\n";
		//$str .= "fullPage : true";
		$str .= "});\r\n";
		$str .= '</script>';
		return $str;
	}
}
