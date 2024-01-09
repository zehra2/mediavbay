<?php
/* Smarty version 4.3.4, created on 2023-12-27 23:08:40
  from 'C:\xampp\htdocs\Script\content\themes\default\templates\admin.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658cae782d4e51_61324328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b111ae2b0dfaa2e47243c57cdc99246db9bfed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Script\\content\\themes\\default\\templates\\admin.notifications.tpl',
      1 => 1684867387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658cae782d4e51_61324328 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-bell mr10"></i><?php echo __("Mass Notifications");?>

  </div>

  <!-- Mass Notifications -->
  <form class="js_ajax-forms" data-url="admin/notifications.php">
    <div class="card-body">
      <div class="alert alert-info">
        <div class="text">
          <strong><?php echo __("Mass Notifications");?>
</strong><br>
          <?php echo __("Enable you to send notifications to all site users");?>
.<br>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo __("URL");?>

        </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="url">
          <div class="form-text">
            <?php echo __("Notification link used when user clicks on the notification");?>

          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo __("Message");?>

        </label>
        <div class="col-sm-9">
          <textarea class="form-control" rows="3" name="message"></textarea>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-danger">
        <i class="fa fa-paper-plane mr10"></i><?php echo __("Send");?>

      </button>
    </div>
  </form>
  <!-- Mass Notifications -->

</div><?php }
}
