<?php /* Smarty version 2.6.14, created on 2010-04-14 10:55:29
         compiled from CRM/common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/common/footer.tpl', 5, false),array('function', 'crmURL', 'CRM/common/footer.tpl', 7, false),array('modifier', 'crmDate', 'CRM/common/footer.tpl', 7, false),)), $this); ?>
<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/version.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('version', ob_get_contents()); ob_end_clean();
 ?>

<?php if ($this->_tpl_vars['contactId']): ?>     <div class="footer" id="record-log"> 
    <span class="col1"><?php if ($this->_tpl_vars['external_identifier']):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>External ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['external_identifier'];  endif; ?>&nbsp; &nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviCRM ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['contactId']; ?>
</span>
    <?php if ($this->_tpl_vars['lastModified']): ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last Change by<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "action=view&reset=1&cid=".($this->_tpl_vars['lastModified']['id'])), $this);?>
"><?php echo $this->_tpl_vars['lastModified']['name']; ?>
</a> (<?php echo ((is_array($_tmp=$this->_tpl_vars['lastModified']['date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
) &nbsp; <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&action=browse&selectedChild=log&cid=".($this->_tpl_vars['contactId'])), $this);?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View Change Log<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    <?php endif; ?>
    </div>
<?php endif; ?>

<div class="footer" id="civicrm-footer"> 
<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['version'],'2' => 'http://www.affero.org/oagpl.html','3' => 'http://civicrm.org/download','4' => 'http://issues.civicrm.org/jira/browse/CRM?report=com.atlassian.jira.plugin.system.project:roadmap-panel','5' => 'http://wiki.civicrm.org/confluence//x/KSg')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Powered by CiviCRM %1. CiviCRM is openly available under the <a href="%2">Affero General Public License (AGPL)</a>. <a href="%3">Download source</a>. <a href="%4">View issues and report bugs</a>. <a href="%5">Online documentation</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div> 