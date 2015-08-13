<?php /* Smarty version Smarty-3.1.7, created on 2015-08-13 08:08:37
         compiled from "/var/www/includes/runtime/../../layouts/vlayout/modules/Install/Step7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42699401555cc50858e0a30-46977723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d151a7bb0c457b3752dc80008d072f78fde6bcb' => 
    array (
      0 => '/var/www/includes/runtime/../../layouts/vlayout/modules/Install/Step7.tpl',
      1 => 1387182362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42699401555cc50858e0a30-46977723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APPUNIQUEKEY' => 0,
    'CURRENT_VERSION' => 0,
    'INDUSTRY' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55cc5085c0b3c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc5085c0b3c')) {function content_55cc5085c0b3c($_smarty_tpl) {?>

<center><?php echo vtranslate('LBL_LOADING_PLEASE_WAIT');?>
...</center>

<form class="form-horizontal" name="step7" method="post" action="?module=Users&action=Login">
	<img src="//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=I&industry=<?php echo urlencode($_smarty_tpl->tpl_vars['INDUSTRY']->value);?>
" alt='' title='' border=0 width='1px' height='1px'>
	<input type=hidden name="username" value="admin" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<script type="text/javascript">
	jQuery(function() { /* Delay to let page load complete */ setTimeout(function() { jQuery('form[name="step7"]').submit(); }, 150); });
</script>
<?php }} ?>