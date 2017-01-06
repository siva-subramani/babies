<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 12:48:59
         compiled from "modules/lavacustom/views/templates/hook/lava_myaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:564330293586be40b158a03-82286872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '141a72b8eaebc6cccde462f34f804dd3033e1de6' => 
    array (
      0 => 'modules/lavacustom/views/templates/hook/lava_myaccount.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '564330293586be40b158a03-82286872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586be40b1694b9_11236496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be40b1694b9_11236496')) {function content_586be40b1694b9_11236496($_smarty_tpl) {?>

<div class="myaccount cols marginb">
	<?php if ($_smarty_tpl->tpl_vars['data']->value['my_title']) {?><h3 class="h3"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3><?php }?>
	<div class="block_content">
		<ul>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_addresses'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_addresses'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_orders'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_orders'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['my_credit']) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_credit'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_credit'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['my_personal']) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_personal'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_personal'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['my_vouchers']) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_vouchers'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['my_vouchers'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }?>
		</ul>
	</div>
</div>
<?php }} ?>
