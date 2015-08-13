<?php /* Smarty version Smarty-3.1.7, created on 2015-08-13 08:40:41
         compiled from "/var/www/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119942827955cc49f9b7add1-36185317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c892dc95149a4b3d1a8dcf503fb8af0c1ebc238' => 
    array (
      0 => '/var/www/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl',
      1 => 1410951677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119942827955cc49f9b7add1-36185317',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55cc49f9c0a4b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc49f9c0a4b')) {function content_55cc49f9c0a4b($_smarty_tpl) {?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row-fluid">
		<div class="span6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="span6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>