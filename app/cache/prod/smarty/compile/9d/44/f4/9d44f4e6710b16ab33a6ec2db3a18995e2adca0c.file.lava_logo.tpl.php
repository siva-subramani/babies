<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 12:48:58
         compiled from "modules/lavacustom/views/templates/hook/lava_logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363411283586be40aeaa125-00666342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d44f4e6710b16ab33a6ec2db3a18995e2adca0c' => 
    array (
      0 => 'modules/lavacustom/views/templates/hook/lava_logo.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363411283586be40aeaa125-00666342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586be40aeb04f6_08467858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be40aeb04f6_08467858')) {function content_586be40aeb04f6_08467858($_smarty_tpl) {?>

<div id="logo" class="">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['urls']->value['base_url'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['logo_text'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
	<?php if ($_smarty_tpl->tpl_vars['data']->value['logo_type']=='text') {?>
		<div class="text">
			<div class="title"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['logo_text'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['data']->value['logo_subtitle']!='') {?><span class="info"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['logo_subtitle'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span></div>
		<?php }?>
		</div>
	<?php } else { ?>
		<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['logo_image'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
	<?php }?>
	</a>
</div><?php }} ?>
