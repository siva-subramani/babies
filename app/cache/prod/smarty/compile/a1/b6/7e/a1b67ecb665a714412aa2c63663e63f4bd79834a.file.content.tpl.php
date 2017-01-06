<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 12:48:49
         compiled from "/var/www/html/admin497v4911x/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:560587731586be4013835c5-26297878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b67ecb665a714412aa2c63663e63f4bd79834a' => 
    array (
      0 => '/var/www/html/admin497v4911x/themes/default/template/content.tpl',
      1 => 1483462345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560587731586be4013835c5-26297878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586be4013853d6_86220463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be4013853d6_86220463')) {function content_586be4013853d6_86220463($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
