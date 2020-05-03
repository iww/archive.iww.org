<?php /* Smarty version 2.6.14, created on 2010-04-14 10:55:29
         compiled from CRM/Contact/Page/View/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/View/DashBoard.tpl', 4, false),array('function', 'crmURL', 'CRM/Contact/Page/View/DashBoard.tpl', 7, false),array('function', 'counter', 'CRM/Contact/Page/View/DashBoard.tpl', 24, false),array('function', 'cycle', 'CRM/Contact/Page/View/DashBoard.tpl', 26, false),array('modifier', 'mb_truncate', 'CRM/Contact/Page/View/DashBoard.tpl', 29, false),array('modifier', 'crmDate', 'CRM/Contact/Page/View/DashBoard.tpl', 37, false),)), $this); ?>
<table class="no-border">
<tr>
<td>
    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Scheduled Activities<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>

    <?php if ($this->_tpl_vars['rows']): ?>
        <form title="activity_pager" action="<?php echo CRM_Utils_System::crmURL(array(), $this);?>
" method="post">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php echo '<table><tr class="columnheader">';  $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
 echo '<th scope="col">';  if ($this->_tpl_vars['header']['sort']):  echo '';  $this->assign('key', $this->_tpl_vars['header']['sort']);  echo '';  echo $this->_tpl_vars['sort']->_response[$this->_tpl_vars['key']]['link'];  echo '';  else:  echo '';  echo $this->_tpl_vars['header']['name'];  echo '';  endif;  echo '</th>';  endforeach; endif; unset($_from);  echo '</tr>';  echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this); echo '';  $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
 echo '<tr class="';  echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this); echo ' ';  echo $this->_tpl_vars['row']['class'];  echo '"><td>';  echo $this->_tpl_vars['row']['activity_type'];  echo '</td><td><a href="';  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/activity','q' => "activity_id=".($this->_tpl_vars['row']['activity_type_id'])."&action=view&selectedChild=activity&id=".($this->_tpl_vars['row']['id'])."&cid=".($this->_tpl_vars['row']['targetID'])."&history=0&context=Home"), $this); echo '">';  echo ((is_array($_tmp=$this->_tpl_vars['row']['subject'])) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 33, "...", true) : smarty_modifier_mb_truncate($_tmp, 33, "...", true));  echo '</a></td><td><a href="';  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['row']['sourceID'])), $this); echo '">';  echo $this->_tpl_vars['row']['sourceName'];  echo '</a></td><td><a href="';  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['row']['targetID'])), $this); echo '">';  echo $this->_tpl_vars['row']['targetName'];  echo '</a></td><td>';  echo ((is_array($_tmp=$this->_tpl_vars['row']['date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp));  echo '</td><td>';  echo $this->_tpl_vars['row']['status_display'];  echo '';  if ($this->_tpl_vars['row']['overdue']):  echo '<br />(';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Overdue';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo ')';  endif;  echo '</td><td>';  echo $this->_tpl_vars['row']['action'];  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '</table>'; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </form>
    <?php else: ?>
    <div>
        <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No activities are currently scheduled.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
    </div>
    <?php endif; ?>
    </fieldset>
</td>
<td>
<fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Quick Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <form action="<?php echo $this->_tpl_vars['postURL']; ?>
" method="post">
    <div class="form-item">
        <?php if ($this->_tpl_vars['drupalFormToken']): ?>
            <input type="hidden" name="edit[token]" value="<?php echo $this->_tpl_vars['drupalFormToken']; ?>
" />
        <?php endif; ?>
        <input type="hidden" name="contact_type" value="" />
        <input type="text" name="sort_name" class="form-text required eight" value="" />
        <input type="submit" name="_qf_Search_refresh" value="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="form-submit" />
        <br />
        <a href="<?php echo $this->_tpl_vars['advancedSearchURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Go to Advanced Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Advanced Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </div>
    </form>
</fieldset>
<fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Menu<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
<?php echo $this->_tpl_vars['menuBlock']['content']; ?>

</fieldset>
<?php if ($this->_tpl_vars['shortcutBlock']['content']): ?>
    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Shortcuts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <?php echo $this->_tpl_vars['shortcutBlock']['content']; ?>

    </fieldset>
<?php endif; ?>
</td>
</tr>
</table>