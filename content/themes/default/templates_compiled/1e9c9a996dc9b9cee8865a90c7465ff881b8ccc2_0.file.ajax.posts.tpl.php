<?php
/* Smarty version 4.3.4, created on 2023-12-24 15:23:26
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\ajax.posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65884cee0a17a9_19797560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e9c9a996dc9b9cee8865a90c7465ff881b8ccc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\ajax.posts.tpl',
      1 => 1647975820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 2,
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_65884cee0a17a9_19797560 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_get']->value) {?>
  <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <!-- see-more -->
    <div class="alert alert-post see-more mb20 js_see-more <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>js_see-more-infinite<?php }?>" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php echo $_smarty_tpl->tpl_vars['_filter']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>
      <span><?php echo __("More Stories");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
} else { ?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
