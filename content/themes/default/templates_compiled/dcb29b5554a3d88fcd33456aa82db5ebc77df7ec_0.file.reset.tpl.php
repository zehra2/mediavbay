<?php
/* Smarty version 4.3.4, created on 2023-12-24 13:02:10
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65882bd2df0587_79527034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcb29b5554a3d88fcd33456aa82db5ebc77df7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\reset.tpl',
      1 => 1691574723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_65882bd2df0587_79527034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt30">
  <div class="row">
    <div class="col-md-6 col-lg-5 mx-md-auto">
      <!-- reset form -->
      <div class="card card-register">
        <div class="card-header">
          <h4 class="card-title"><?php echo __("Forgot your password?");?>
</h4>
          <p class="card-subtitle"><?php echo __("Enter the email address associated with your account and we will send you a link to reset your password.");?>
</p>
        </div>
        <div class="card-body pt0">
          <form class="js_ajax-forms" data-url="core/forget_password.php">
            <!-- email -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-envelope fa-fw"></i></span>
                <input name="email" type="email" class="form-control" placeholder='<?php echo __("Email");?>
' required>
              </div>
            </div>
            <!-- email -->

            <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
              <div class="form-group">
                <!-- reCAPTCHA -->
                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                <!-- reCAPTCHA -->
              </div>
            <?php }?>

            <div class="d-grid form-group">
              <input type="hidden" name="secret" value="<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
">
              <button type="submit" class="btn btn-primary">
                <?php echo __("Continue");?>

              </button>
            </div>

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->
          </form>
          <div class="mt20 text-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin" class="text-link"><?php echo __("Back to Signin");?>
</a>
          </div>
          <div class="mt20 text-center">
            <?php echo __("Don’t have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup" class="text-link"><?php echo __("Sign Up");?>
</a>
          </div>
        </div>
      </div>
      <!-- reset form -->
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
