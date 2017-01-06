<?php /* Smarty version Smarty-3.1.19, created on 2017-01-03 14:46:27
         compiled from "/var/www/html/themes/lava0133/templates/_partials/form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1336005188586bff93ca5989-36430075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1132194e618d915d079dd4d3c7419cf7d1ec0ee3' => 
    array (
      0 => '/var/www/html/themes/lava0133/templates/_partials/form-errors.tpl',
      1 => 1483465723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1336005188586bff93ca5989-36430075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586bff93ca8237_12081503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586bff93ca8237_12081503')) {function content_586bff93ca8237_12081503($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
