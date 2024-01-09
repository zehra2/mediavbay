<?php
/* Smarty version 4.3.4, created on 2023-12-27 23:04:02
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\__custom_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658cad627943d5_98431664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61e3c8be3464daaf17c484b935ba053aca68c487' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\__custom_fields.tpl',
      1 => 1689526585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658cad627943d5_98431664 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_registration']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
    <label class="form-label"><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>*<?php }?></label>
    <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
      <input class="form-control" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" type="text" <?php if (!$_smarty_tpl->tpl_vars['_search']->value) {?>placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
    <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
      <textarea class="form-control" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['_search']->value) {?>placeholder="<?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>></textarea>
    <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
      <select class="form-select" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['_search']->value) {?>
          <option selected value="any"><?php echo __("Any");?>
</option>
        <?php } else { ?>
          <option selected value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
      <select class="form-select" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
[]" multiple <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>required<?php }?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['description'] && !$_smarty_tpl->tpl_vars['_search']->value) {?>
      <div class="form-text">
        <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['description']);?>

      </div>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_custom_fields']->value, 'custom_field');
$_smarty_tpl->tpl_vars['custom_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
$_smarty_tpl->tpl_vars['custom_field']->do_else = false;
?>
    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?>row<?php }?>">
      <label class="form-label <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?>col-md-3<?php }?>"><?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
 <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>*<?php }?></label>
      <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?><div class="col-md-9"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textbox") {?>
          <input class="form-control" type="text" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
        <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "textarea") {?>
          <textarea class="form-control" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>
</textarea>
        <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "selectbox") {?>
          <select class="form-select" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
            <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == '') {?>selected<?php }?> value="none"><?php echo __("Select");?>
 <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['label']);?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
              <option <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php } elseif ($_smarty_tpl->tpl_vars['custom_field']->value['type'] == "multipleselectbox") {?>
          <select class="form-select" name="fld_<?php echo $_smarty_tpl->tpl_vars['custom_field']->value['field_id'];?>
[]" multiple <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['mandatory']) {?>required<?php }?>>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_field']->value['options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
              <option <?php if ((isset($_smarty_tpl->tpl_vars['custom_field']->value['value'])) && in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['custom_field']->value['value'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value);?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['description']) {?>
          <div class="form-text">
            <?php echo __($_smarty_tpl->tpl_vars['custom_field']->value['description']);?>

          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_inline']->value) {?>
      </div><?php }?>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
