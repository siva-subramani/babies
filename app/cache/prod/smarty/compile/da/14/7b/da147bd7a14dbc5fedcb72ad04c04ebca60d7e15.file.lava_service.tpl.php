<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 12:48:59
         compiled from "modules/lavacustom/views/templates/hook/lava_service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:949243517586be40b16f3e7-43011401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da147bd7a14dbc5fedcb72ad04c04ebca60d7e15' => 
    array (
      0 => 'modules/lavacustom/views/templates/hook/lava_service.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '949243517586be40b16f3e7-43011401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'link' => 0,
    'cmslink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586be40b17d921_28562834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586be40b17d921_28562834')) {function content_586be40b17d921_28562834($_smarty_tpl) {?>

<div class="service cols marginb">
	<?php if ($_smarty_tpl->tpl_vars['data']->value['title']) {?><h3 class="h3"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3><?php }?>
	<div class="block_content">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['show_store']=='yes') {?><li class="item"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['store'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['show_sitemap']=='yes') {?><li class="item"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['sitemap'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['show_contact']=='yes') {?><li class="item"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['data']->value['contact'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li><?php }?>
		<?php  $_smarty_tpl->tpl_vars['cmslink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmslink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['cmslinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmslink']->key => $_smarty_tpl->tpl_vars['cmslink']->value) {
$_smarty_tpl->tpl_vars['cmslink']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['cmslink']->value['title']!='') {?>
			<li class="item"><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(addslashes($_smarty_tpl->tpl_vars['cmslink']->value['link']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cmslink']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
		<?php }?>
		<?php } ?>
		</ul>
	</div>
</div>
<?php }} ?>
