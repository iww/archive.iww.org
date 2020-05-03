<?php /* Smarty version 2.6.14, created on 2010-04-14 13:23:01
         compiled from CRM/Contact/Form/Search/Intro.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Contact/Form/Search/Intro.tpl', 5, false),array('function', 'help', 'CRM/Contact/Form/Search/Intro.tpl', 41, false),array('block', 'ts', 'CRM/Contact/Form/Search/Intro.tpl', 6, false),)), $this); ?>
<?php if ($this->_tpl_vars['context'] == 'smog'): ?>
    <div id="help">
        <?php ob_start();  echo CRM_Utils_System::crmURL(array('q' => "context=amtg&amtgID=".($this->_tpl_vars['group']['id'])."&reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('addMembersURL', ob_get_contents());ob_end_clean(); ?>
        <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['group']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The members of the <strong>%1</strong> group are listed below. Use the 'Find Members...' criteria below to search for specific members. Use the 'Group Status...' checkboxes to view members with 'Pending' status and/or members who have been 'Removed' from this group.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <?php if ($this->_tpl_vars['permissionedForGroup']): ?>
        <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['addMembersURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use the <a href="%1">Add Members...</a> screen if you want to add new members to this group.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php if ($this->_tpl_vars['ssID']): ?>
            <?php if ($this->_tpl_vars['ssMappingID']): ?>
                <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/builder",'q' => "reset=1&force=1&ssID=".($this->_tpl_vars['ssID'])), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('editSmartGroupURL', ob_get_contents());ob_end_clean(); ?>
            <?php else: ?>
		<?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/advanced",'q' => "reset=1&force=1&ssID=".($this->_tpl_vars['ssID'])), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('editSmartGroupURL', ob_get_contents());ob_end_clean(); ?>
            <?php endif; ?> 
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['editSmartGroupURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a href="%1">Edit Smart Group Search Criteria...</a> to change the search query used for this 'smart' group.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
        </p>
        <?php endif; ?>
    </div>
    <?php if ($this->_tpl_vars['permissionedForGroup']): ?>
    <div class="form-item">
        <a href="<?php echo $this->_tpl_vars['addMembersURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['group']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Members to %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </div>
    <?php endif; ?>
    
        <?php if ($this->_tpl_vars['ssID']): ?>
        <div class="form-item">
            <a href="<?php echo $this->_tpl_vars['editSmartGroupURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['group']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Smart Group Search Criteria for %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </div>
    <?php endif; ?>

<?php elseif ($this->_tpl_vars['context'] == 'amtg'): ?>
    <div id="help">
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['group']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use the Search form to find contacts to add to %1. Mark the contacts you want to add and click 'Add Contacts...'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>

<?php else: ?>
    <div id="help">
        <?php if ($this->_tpl_vars['action'] == 512): ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use <strong>%</strong> wildcard(s) for partial matches. EXAMPLE: Enter "Volunteer%" as your Activity Type to match any activity whose type is "Volunteer" + any other words (e.g. Volunteer for Open House).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => 'advanced-intro'), $this);?>

        <?php else: ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use the Search Criteria form to find contacts by name, type of contact, group membership, tags, etc. You can then view or edit contact details, print a contact list, or you can use the More Actions drop down list to assign tags, add to Groups, create Smart Groups, export contact data to a spreadsheet, etc.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['ssID']): ?>
            <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you've changed search criteria for this 'smart group' and want to save your changes, select <strong>Update Smart Group</strong> from the '- more actions -' drop-down menu, and then click Go.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <?php endif; ?>
    </div>

<?php endif; ?>