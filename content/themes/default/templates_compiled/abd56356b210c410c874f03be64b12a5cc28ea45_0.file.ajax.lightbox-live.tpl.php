<?php
/* Smarty version 4.3.4, created on 2023-12-24 15:48:14
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\ajax.lightbox-live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658852bebf9457_47503600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abd56356b210c410c874f03be64b12a5cc28ea45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\ajax.lightbox-live.tpl',
      1 => 1647975800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_live.tpl' => 1,
  ),
),false)) {
function content_658852bebf9457_47503600 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lightbox-post" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
  <div class="js_scroller" data-slimScroll-height="100%">
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_live.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div><?php }
}
