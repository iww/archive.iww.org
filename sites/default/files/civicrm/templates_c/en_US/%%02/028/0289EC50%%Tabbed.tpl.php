<?php /* Smarty version 2.6.14, created on 2010-04-16 04:15:55
         compiled from CRM/Contact/Page/View/Tabbed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/View/Tabbed.tpl', 14, false),array('function', 'crmURL', 'CRM/Contact/Page/View/Tabbed.tpl', 14, false),array('modifier', 'nl2br', 'CRM/Contact/Page/View/Tabbed.tpl', 102, false),array('modifier', 'crmDate', 'CRM/Contact/Page/View/Tabbed.tpl', 153, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] == 2): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else: ?>
<div id="mainTabContainer" dojoType="TabContainer" style="width: 100%; height: 600px; overflow-y: auto;" selectedTab="<?php echo $this->_tpl_vars['selectedChild']; ?>
">

<div id="summary" dojoType="ContentPane" style="overflow: auto; width: 100%; height: 100%;" label="Summary">

<div id="contact-name" class="section-hidden section-hidden-border">
   <div>
    <label><span class="font-size12pt"><?php echo $this->_tpl_vars['displayName']; ?>
</span></label><?php if ($this->_tpl_vars['nick_name']): ?>&nbsp;&nbsp;(<?php echo $this->_tpl_vars['nick_name']; ?>
)<?php endif; ?>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
        &nbsp; &nbsp; <input type="button" value="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" name="edit_contact_info" onclick="window.location='<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/add','q' => "reset=1&action=update&cid=".($this->_tpl_vars['contactId'])), $this);?>
';"/>
    <?php endif; ?>
    &nbsp; &nbsp; <input type="button" value="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>vCard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" name="vCard_export" onclick="window.location='<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/vcard','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])), $this);?>
';"/>
    &nbsp; &nbsp; <input type="button" value="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Print<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" name="contact_print" onclick="window.location='<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/print','q' => "reset=1&print=1&cid=".($this->_tpl_vars['contactId'])), $this);?>
';"/>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
        &nbsp; &nbsp; <input type="button" value="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" name="contact_delete" onclick="window.location='<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/delete','q' => "reset=1&delete=1&cid=".($this->_tpl_vars['contactId'])), $this);?>
';"/>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['dashboardURL']): ?> &nbsp; &nbsp; <a href="<?php echo $this->_tpl_vars['dashboardURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View Contact Dashboard<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> <?php endif; ?>
    <?php if ($this->_tpl_vars['url']): ?> &nbsp; &nbsp; <a href="<?php echo $this->_tpl_vars['url']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View User Record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> <?php endif; ?>
    <table class="form-layout-compressed">
    <tr>
        <?php if ($this->_tpl_vars['source']): ?><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Source<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</label></td><td><?php echo $this->_tpl_vars['source']; ?>
</td><?php endif; ?>
        <?php if ($this->_tpl_vars['contactTag']): ?><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</label></td><td><?php echo $this->_tpl_vars['contactTag']; ?>
</td><?php endif; ?>
        <?php if (! $this->_tpl_vars['source']): ?><td colspan="2"></td><?php endif; ?>
        <?php if (! $this->_tpl_vars['contactTag']): ?><td colspan="2"></td><?php endif; ?>
    </tr>
    <tr>
        <?php if ($this->_tpl_vars['job_title']): ?><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Job Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</label></td><td><?php echo $this->_tpl_vars['job_title']; ?>
</td><?php endif; ?>
        <?php if ($this->_tpl_vars['home_URL']): ?><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Website<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td><td><a href="<?php echo $this->_tpl_vars['home_URL']; ?>
" target="_blank"><?php echo $this->_tpl_vars['home_URL']; ?>
</a></td><?php endif; ?>
        <?php if (! $this->_tpl_vars['job_title']): ?><td colspan="2"></td><?php endif; ?>
        <?php if (! $this->_tpl_vars['home_URL']): ?><td colspan="2"></td><?php endif; ?>
    </tr>
    </table>
   </div>
</div>


<?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/ActivityLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php $_from = $this->_tpl_vars['location']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locationIndex'] => $this->_tpl_vars['loc']):
?>

<div id="location_<?php echo $this->_tpl_vars['locationIndex']; ?>
_show" class="section-hidden section-hidden-border">
  <a href="#" onclick="hide('location_<?php echo $this->_tpl_vars['locationIndex']; ?>
_show'); show('location_<?php echo $this->_tpl_vars['locationIndex']; ?>
'); return false;"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreePlus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>open section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a><label><?php echo $this->_tpl_vars['loc']['location_type'];  if ($this->_tpl_vars['loc']['name']): ?> - <?php echo $this->_tpl_vars['loc']['name'];  endif;  if ($this->_tpl_vars['locationIndex'] == 1): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(primary location)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?></label>
  <?php if ($this->_tpl_vars['preferred_communication_method_display'] == 'Email'): ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preferred Email:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <?php echo $this->_tpl_vars['loc']['email']['1']['email']; ?>

  <?php elseif ($this->_tpl_vars['preferred_communication_method_display'] == 'Phone'): ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preferred Phone:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <?php echo $this->_tpl_vars['loc']['phone']['1']['phone'];  endif; ?>
</div>

<div id="location_<?php echo $this->_tpl_vars['locationIndex']; ?>
" class="section-shown">
  <fieldset>
   <legend<?php if ($this->_tpl_vars['locationIndex'] == 1): ?> class="label"<?php endif; ?>>
    <a href="#" onclick="hide('location_<?php echo $this->_tpl_vars['locationIndex']; ?>
'); show('location_<?php echo $this->_tpl_vars['locationIndex']; ?>
_show'); return false;"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreeMinus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>close section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a><?php echo $this->_tpl_vars['loc']['location_type'];  if ($this->_tpl_vars['loc']['name']): ?> - <?php echo $this->_tpl_vars['loc']['name'];  endif;  if ($this->_tpl_vars['locationIndex'] == 1): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(primary location)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>
   </legend>

  <div class="col1">
   <?php $_from = $this->_tpl_vars['loc']['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['phone']):
?>
     <?php if ($this->_tpl_vars['phone']['phone']): ?>
        <?php if ($this->_tpl_vars['phone']['is_primary'] == 1): ?><strong><?php endif; ?>
        <?php if ($this->_tpl_vars['phone']['phone_type']):  echo $this->_tpl_vars['phone']['phone_type_display']; ?>
:<?php endif; ?> <?php echo $this->_tpl_vars['phone']['phone']; ?>

        <?php if ($this->_tpl_vars['phone']['is_primary'] == 1): ?></strong><?php endif; ?>
        <br />
     <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>

   <?php $_from = $this->_tpl_vars['loc']['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
      <?php if ($this->_tpl_vars['email']['email']): ?>
        <?php if ($this->_tpl_vars['email']['is_primary'] == 1): ?><strong><?php endif; ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <a href="mailto:<?php echo $this->_tpl_vars['email']['email']; ?>
"><?php echo $this->_tpl_vars['email']['email']; ?>
</a>
        <?php if ($this->_tpl_vars['email']['is_primary'] == 1): ?></strong><?php endif; ?>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['email']['on_hold']): ?>
	    <span class="status-hold">&nbsp;(On Hold)</span>
	  <?php endif; ?>
      <?php if ($this->_tpl_vars['email']['is_bulkmail']): ?>
	    <span class="status-hold">&nbsp;(Bulk Mailings)</span>
	  <?php endif; ?>
	<br />
   <?php endforeach; endif; unset($_from); ?>

   <?php $_from = $this->_tpl_vars['loc']['im']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['imKey'] => $this->_tpl_vars['im']):
?>
     <?php if ($this->_tpl_vars['im']['name'] || $this->_tpl_vars['im']['provider']): ?>
        <?php if ($this->_tpl_vars['im']['is_primary'] == 1): ?><strong><?php endif; ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Instant Messenger:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php if ($this->_tpl_vars['im']['name']):  echo $this->_tpl_vars['im']['name'];  endif; ?> <?php if ($this->_tpl_vars['im']['provider']): ?>( <?php echo $this->_tpl_vars['im']['provider']; ?>
 ) <?php endif; ?>
        <?php if ($this->_tpl_vars['im']['is_primary'] == 1): ?></strong><?php endif; ?>
        <br />
     <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
   </div>

   <div class="col2">

        <?php if ($this->_tpl_vars['config']->mapAPIKey && $this->_tpl_vars['loc']['address']['geo_code_1'] && $this->_tpl_vars['loc']['address']['geo_code_2']): ?>
        <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/map','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])."&lid=".($this->_tpl_vars['loc']['address']['location_id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map Primary Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map this Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a><br />
    <?php endif; ?>
    <?php echo ((is_array($_tmp=$this->_tpl_vars['loc']['address']['display'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

  </div>
  <div class="spacer"></div>
  </fieldset>
</div>
<?php endforeach; endif; unset($_from); ?>

<div id="commPrefs_show" class="section-hidden section-hidden-border">
  <a href="#" onclick="hide('commPrefs_show'); show('commPrefs'); return false;"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreePlus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>open section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Communications Preferences<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
 </div>

<div id="commPrefs" class="section-shown">
 <fieldset>
  <legend><a href="#" onclick="hide('commPrefs'); show('commPrefs_show'); return false;"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreeMinus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>close section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Communications Preferences<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
  <div class="col1">
    <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Privacy:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
    <span class="font-red upper">
    <?php $_from = $this->_tpl_vars['privacy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['privacy_label'] => $this->_tpl_vars['privacy_val']):
?>
      <?php if ($this->_tpl_vars['privacy_val'] == 1):  echo $this->_tpl_vars['privacy_values'][$this->_tpl_vars['privacy_label']]; ?>
 &nbsp; <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php if ($this->_tpl_vars['is_opt_out']): ?>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>DO NOT SEND BULK EMAIL<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php endif; ?>
    </span>
  </div>
  <div class="col2">
    <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Method:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <?php echo $this->_tpl_vars['preferred_communication_method_display']; ?>

  </div>
  <div class="col2">
    <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Format Preference:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <?php echo $this->_tpl_vars['preferred_mail_format_display']; ?>

  </div>
  <div class="spacer"></div>
 </fieldset>
</div>


<?php if ($this->_tpl_vars['contact_type'] == 'Individual'): ?>
<div id="demographics_show" class="section-hidden section-hidden-border">
  <a href="#" onclick="hide('demographics_show'); show('demographics'); return false;"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreePlus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>open section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label><br />
 </div>

<div id="demographics" class="section-shown">
  <fieldset>
   <legend><a href="#" onclick="hide('demographics'); show('demographics_show'); return false;"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreeMinus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>close section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></a><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
   <div class="col1">
    <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Gender:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <?php echo $this->_tpl_vars['gender_display']; ?>
<br />
    <?php if ($this->_tpl_vars['is_deceased'] == 1): ?>
        <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact is Deceased<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
    <?php endif; ?>
   </div>
   <div class="col2">
    <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date of Birth:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <?php echo ((is_array($_tmp=$this->_tpl_vars['birth_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<br />
    <?php if ($this->_tpl_vars['deceased_date']): ?>
        <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date Deceased:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> <?php echo ((is_array($_tmp=$this->_tpl_vars['deceased_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

    <?php endif; ?>
   </div>
   <div class="spacer"></div>
  </fieldset>
 </div>
 <?php endif; ?>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/InlineCustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_from = $this->_tpl_vars['allTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabName'] => $this->_tpl_vars['tabValue']):
?>
  <div id="<?php echo $this->_tpl_vars['tabValue']['id']; ?>
" dojoType="ContentPane" href="<?php echo $this->_tpl_vars['tabValue']['url']; ?>
" label="<?php echo $this->_tpl_vars['tabValue']['title']; ?>
" style="display: none; overflow: auto; width: 100%; height: 100%;" adjustPaths="false" executeScripts="true"></div>
<?php endforeach; endif; unset($_from); ?>
</div>

<?php echo '
 <script type="text/javascript">

   init_blocks = function( ) {
'; ?>

      var showBlocks = new Array(<?php echo $this->_tpl_vars['showBlocks']; ?>
);
      var hideBlocks = new Array(<?php echo $this->_tpl_vars['hideBlocks']; ?>
);
<?php echo '
      on_load_init_blocks( showBlocks, hideBlocks );
  }

  dojo.addOnLoad( init_blocks );
 </script>
'; ?>


<?php endif; ?>