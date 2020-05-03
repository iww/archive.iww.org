<?php /* Smarty version 2.6.14, created on 2010-04-14 10:55:02
         compiled from CRM/common/CMSUser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/common/CMSUser.tpl', 7, false),)), $this); ?>
<?php if ($this->_tpl_vars['showCMS']): ?> 
 <?php ob_start();  echo $this->_tpl_vars['config']->userFrameworkBaseURL;  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('loginUrl', ob_get_contents());ob_end_clean(); ?>
 <fieldset>
    <div class="messages help">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you would like to create an account on this site, check the box below and enter a user name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php if ($this->_tpl_vars['form']['cms_pass']):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>and a password<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>.
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['loginUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you already have an account, <a href="%1">please login</a> before completing this form.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div><?php echo $this->_tpl_vars['form']['cms_create_account']['html']; ?>
 <?php echo $this->_tpl_vars['form']['cms_create_account']['label']; ?>
</div>
    <div id="details">
        <table class="form-layout-compressed">
        <tr>
            <td><?php echo $this->_tpl_vars['form']['cms_name']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['cms_name']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your preferred username; punctuation is not allowed except for periods, hyphens, and underscores.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
    
        <?php if ($this->_tpl_vars['form']['cms_pass']): ?>
            <tr><td><?php echo $this->_tpl_vars['form']['cms_pass']['label']; ?>
</td> <td> <?php echo $this->_tpl_vars['form']['cms_pass']['html']; ?>
</td></tr>        
            <tr><td><?php echo $this->_tpl_vars['form']['cms_confirm_pass']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['cms_confirm_pass']['html']; ?>
<br />
                    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Provide a password for the new account in both fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </td>
            </tr>
        <?php endif; ?>
        </table>        
    </div>
  </fieldset>

<script type="text/javascript">
<?php echo '
 if ( document.getElementsByName("cms_create_account")[0].checked ) {
     show(\'details\');
  } else {
     hide(\'details\');
  }
 function showMessage( frm )
 {
   var cId = '; ?>
'<?php echo $this->_tpl_vars['cId']; ?>
'<?php echo ';
   if ( cId ) {
     alert("You are logged-in user");
     frm.checked = false;
   } else {
     var siteName = '; ?>
'<?php echo $this->_tpl_vars['config']->userFrameworkBaseURL; ?>
'<?php echo ';
     alert("Please login if you have an account on this site with the link " + siteName  );
   }
 }
  '; ?>
	
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'create_account','trigger_value' => "",'target_element_id' => 'details','target_element_type' => 'block','field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>
