<?php
/* Smarty version 4.3.4, created on 2023-12-24 22:48:36
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\ajax.product.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6588b54433df90_71970039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '557b192eed27c043f9d82eb6e7c8f8b549172e20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\ajax.product.publisher.tpl',
      1 => 1703458109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_6588b54433df90_71970039 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Sell New Product");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-label"><?php echo __("Product Name");?>
</label>
      <input name="name" type="text" class="form-control">
    </div>
    <div class="row">
      <div class="form-group col-md-8">
        <label class="form-label"><?php echo __("Total Item Units");?>
</label>
        <input name="quantity" type="number" min="1" class="form-control">
      </div>
       <div class="form-group col-md-8">
        <label class="form-label"><?php echo __("Total Item Units");?>
</label>
        <input name="quantity" type="number" min="1" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label class="form-label"><?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)</label>
        <input name="price" type="text" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-8">
        <label class="form-label"><?php echo __("Category");?>
</label>
        <select class="form-select" name="category">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['market_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label class="form-label"><?php echo __("Status");?>
</label>
        <select class="form-select" name="status">
          <option value="new"><?php echo __("New");?>
</option>
          <option value="old"><?php echo __("Used");?>
</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label"><?php echo __("Location");?>
</label>
      <input name="location" type="text" class="form-control js_geocomplete">
    </div>
    <div class="form-group">
      <label class="form-label"><?php echo __("Description");?>
</label>
      <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Photos");?>
</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-product"><?php echo __("Publish");?>
</button>
  </div>
</form><?php }
}
