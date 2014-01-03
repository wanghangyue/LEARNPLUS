/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	 config.toolbarGroups = [  
	                         { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },  
	                         { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },  
	                         { name: 'links' },  
	                         { name: 'insert' },  
	                         { name: 'forms' },  
	                         { name: 'tools' },  
	                         { name: 'document',    groups: [ 'mode', 'document', 'doctools' ] },  
	                         { name: 'others' },  
	                         '/',  
	                         { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },  
	                         { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },  
	                         { name: 'styles' },  
	                         { name: 'colors' },  
	                         { name: 'about' }  
	                     ];  
	                   
	                     // Remove some buttons, provided by the standard plugins, which we don't  
	                     // need to have in the Standard(s) toolbar.  
	                     config.removeButtons = 'Underline,Subscript,Superscript';  
	                     //下面是增加的配置代码  
	                     config.filebrowserBrowseUrl = 'ckeditor/ckfinder/ckfinder.html';  
	                     config.filebrowserImageBrowseUrl = 'ckeditor/ckfinder/ckfinder.html?Type=Images';  
	                     config.filebrowserFlashBrowseUrl = 'ckeditor/ckfinder/ckfinder.html?Type=Flash';  
	                     config.filebrowserUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';  
	                     config.filebrowserImageUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';  
	                     config.filebrowserFlashUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';  
};
