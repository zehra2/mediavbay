<?php
/* Smarty version 4.3.4, created on 2023-12-21 16:57:34
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\_header.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65846e7e7d3cb6_55328741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee5c074c4e2c2c9d8d0be032252ebbc64d0d743' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\_header.messages.tpl',
      1 => 1685465744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_65846e7e7d3cb6_55328741 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-messages">
  <a href="#" data-bs-toggle="dropdown" data-display="static">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-messages",'class'=>"header-icon",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <span class="counter red shadow-sm rounded-pill <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'] == 0) {?>x-hidden<?php }?>">
      <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_messages_counter'];?>

    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-end dropdown-widget">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo __("Messages");?>
</span>
      <a class="float-end text-link js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new"><?php echo __("Send a New Message");?>
</a>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['conversations'], 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <?php echo __("No messages");?>

          </p>
        <?php }?>
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages"><?php echo __("See All");?>
</a>
  </div>
</li><?php }
}
