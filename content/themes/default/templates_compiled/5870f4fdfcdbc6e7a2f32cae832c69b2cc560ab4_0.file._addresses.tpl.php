<?php
/* Smarty version 4.3.4, created on 2023-12-24 15:26:16
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\_addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65884d98a76043_97674795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5870f4fdfcdbc6e7a2f32cae832c69b2cc560ab4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\_addresses.tpl',
      1 => 1688838761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_65884d98a76043_97674795 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="payment-plans">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
    <div class="payment-plan">
      <div class="text-xxlg"><?php echo $_smarty_tpl->tpl_vars['address']->value['address_title'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_details'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_city'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_country'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_zip_code'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['address']->value['address_phone'];?>
</div>
      <div class="mt10 row g-1">
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-md-8<?php } else { ?>col-md-9<?php }?> mb5">
          <div class="d-grid">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="users/addresses.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['address']->value['address_id'];?>
" class="text-link ml10">
              <?php echo __("Edit");?>

            </button>
          </div>
        </div>
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>col-md-4<?php } else { ?>col-md-3<?php }?>">
          <div class="d-grid">
            <button type="button" class="btn btn-sm btn-light js_address-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['address']->value['address_id'];?>
">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"danger-icon",'width'=>"18px",'height'=>"18px"), 0, true);
?>
            </button>
          </div>
        </div>
      </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div data-toggle="modal" data-url="users/addresses.php?do=add" class="payment-plan new address">
    <i class="fa fa-plus mr5"></i>
    <?php echo __("Add New");?>

  </div>
</div><?php }
}
