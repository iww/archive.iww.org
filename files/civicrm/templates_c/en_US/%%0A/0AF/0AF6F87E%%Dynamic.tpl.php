<?php /* Smarty version 2.6.14, created on 2010-02-17 19:25:52
         compiled from CRM/Profile/Form/Dynamic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'CRM/Profile/Form/Dynamic.tpl', 5, false),array('modifier', 'cat', 'CRM/Profile/Form/Dynamic.tpl', 40, false),array('modifier', 'substr', 'CRM/Profile/Form/Dynamic.tpl', 90, false),array('block', 'ts', 'CRM/Profile/Form/Dynamic.tpl', 42, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
js/Common.js"></script>
<?php if (! empty ( $this->_tpl_vars['fields'] )): ?>
<div id="crm-container" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
">

    <?php if ($this->_tpl_vars['mode'] == 8 || $this->_tpl_vars['mode'] == 1): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/body.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    
    <?php echo '';  if ($this->_tpl_vars['help_pre'] && $this->_tpl_vars['action'] != 4):  echo '<div class="messages help">';  echo $this->_tpl_vars['help_pre'];  echo '</div>';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/CMSUser.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  $this->assign('zeroField', 'Initial Non Existent Fieldset');  echo '';  $this->assign('fieldset', $this->_tpl_vars['zeroField']);  echo '';  $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['field']):
 echo '';  if ($this->_tpl_vars['field']['groupTitle'] != $this->_tpl_vars['fieldset']):  echo '';  if ($this->_tpl_vars['fieldset'] != $this->_tpl_vars['zeroField']):  echo '</table>';  if ($this->_tpl_vars['groupHelpPost']):  echo '<div class="messages help">';  echo $this->_tpl_vars['groupHelpPost'];  echo '</div>';  endif;  echo '';  if ($this->_tpl_vars['mode'] == 8):  echo '</fieldset>';  else:  echo '</fieldset></div>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['mode'] == 8):  echo '<fieldset>';  else:  echo '';  $this->assign('groupId', ((is_array($_tmp='id_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field']['group_id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field']['group_id'])));  echo '<div id="';  echo $this->_tpl_vars['groupId'];  echo '_show" class="section-hidden section-hidden-border"><a href="#" onclick="hide(\'';  echo $this->_tpl_vars['groupId'];  echo '_show\'); show(\'';  echo $this->_tpl_vars['groupId'];  echo '\'); return false;"><img src="';  echo $this->_tpl_vars['config']->resourceBase;  echo 'i/TreePlus.gif" class="action-icon" alt="';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'open section';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '"/></a><label>';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '';  echo $this->_tpl_vars['field']['groupTitle'];  echo '';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</label><br /></div><div id="';  echo $this->_tpl_vars['groupId'];  echo '"><fieldset><legend><a href="#" onclick="hide(\'';  echo $this->_tpl_vars['groupId'];  echo '\'); show(\'';  echo $this->_tpl_vars['groupId'];  echo '_show\'); return false;"><img src="';  echo $this->_tpl_vars['config']->resourceBase;  echo 'i/TreeMinus.gif" class="action-icon" alt="';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'close section';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '"/></a>';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '';  echo $this->_tpl_vars['field']['groupTitle'];  echo '';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</legend>';  endif;  echo '';  $this->assign('fieldset', ($this->_tpl_vars['field']['groupTitle']));  echo '';  $this->assign('groupHelpPost', ($this->_tpl_vars['field']['groupHelpPost']));  echo '';  if ($this->_tpl_vars['field']['groupHelpPre']):  echo '<div class="messages help">';  echo $this->_tpl_vars['field']['groupHelpPre'];  echo '</div>';  endif;  echo '<table class="form-layout-compressed">';  endif;  echo '';  $this->assign('n', $this->_tpl_vars['field']['name']);  echo '';  if ($this->_tpl_vars['field']['options_per_line']):  echo '<tr><td class="option-label">';  echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label'];  echo '</td><td>';  $this->assign('count', '1');  echo '';  echo '<table class="form-layout-compressed"><tr>';  echo '';  $this->assign('index', '1');  echo '';  $_from = $this->_tpl_vars['form'][$this->_tpl_vars['n']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['outer']['iteration']++;
 echo '';  if ($this->_tpl_vars['index'] < 10):  echo '';  $this->assign('index', ($this->_tpl_vars['index']+1));  echo '';  else:  echo '<td class="labels font-light">';  echo $this->_tpl_vars['form'][$this->_tpl_vars['n']][$this->_tpl_vars['key']]['html'];  echo '</td>';  if ($this->_tpl_vars['count'] == $this->_tpl_vars['field']['options_per_line']):  echo '</tr><tr>';  $this->assign('count', '1');  echo '';  else:  echo '';  $this->assign('count', ($this->_tpl_vars['count']+1));  echo '';  endif;  echo '';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</tr></table>';  echo '</td></tr>';  else:  echo '<tr><td class="label">';  echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label'];  echo '</td><td>';  if (((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 3) : substr($_tmp, 0, 3)) == 'im-'):  echo '';  $this->assign('provider', ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-provider_id") : smarty_modifier_cat($_tmp, "-provider_id")));  echo '';  echo $this->_tpl_vars['form'][$this->_tpl_vars['provider']]['html'];  echo '&nbsp;';  endif;  echo '';  echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html'];  echo '</td></tr>';  if ($this->_tpl_vars['form'][$this->_tpl_vars['n']]['type'] == 'file'):  echo '<tr><td class="label"></td><td>';  echo $this->_tpl_vars['customFiles'][$this->_tpl_vars['n']]['displayURL'];  echo '</td></tr><tr><td class="label"></td><td>';  echo $this->_tpl_vars['customFiles'][$this->_tpl_vars['n']]['deleteURL'];  echo '</td></tr>';  endif;  echo '';  endif;  echo '';  echo '';  if ($this->_tpl_vars['field']['help_post'] && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']):  echo '<tr><td>&nbsp;</td><td class="description">';  echo $this->_tpl_vars['field']['help_post'];  echo '</td></tr>';  endif;  echo '';  endforeach; endif; unset($_from);  echo '';  if ($this->_tpl_vars['addToGroupId']):  echo '<tr><td class="label">';  echo $this->_tpl_vars['form']['group'][$this->_tpl_vars['addToGroupId']]['label'];  echo '</td><td>';  echo $this->_tpl_vars['form']['group'][$this->_tpl_vars['addToGroupId']]['html'];  echo '</td></tr>';  endif;  echo '</table>';  if ($this->_tpl_vars['field']['groupHelpPost']):  echo '<div class="messages help">';  echo $this->_tpl_vars['field']['groupHelpPost'];  echo '</div>';  endif;  echo '';  if ($this->_tpl_vars['mode'] == 8):  echo '</fieldset>';  else:  echo '</fieldset></div>';  endif;  echo '';  if ($this->_tpl_vars['mode'] == 8 || $this->_tpl_vars['mode'] == 4 || $this->_tpl_vars['mode'] == 1):  echo '';  if ($this->_tpl_vars['isCaptcha']):  echo '<table class="form-layout-compressed"><tr><td></td><td>';  echo $this->_tpl_vars['form']['captcha_image']['html'];  echo '</td></tr><tr><td></td><td>';  echo $this->_tpl_vars['form']['captcha_phrase']['html'];  echo '<div class="messages help">';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Please enter the phrase as displayed in the image';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</div></td></tr></table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['mode'] == 4):  echo '<div class="crm-submit-buttons">';  echo $this->_tpl_vars['form']['buttons']['html'];  echo '</div>';  endif;  echo '';  if ($this->_tpl_vars['help_post'] && $this->_tpl_vars['action'] != 4):  echo '<br /><div class="messages help">';  echo $this->_tpl_vars['help_post'];  echo '</div>';  endif;  echo ''; ?>


</div> 

<script type="text/javascript">
  <?php if ($this->_tpl_vars['mode'] != 8): ?>

    var showBlocks = new Array(<?php echo $this->_tpl_vars['showBlocks']; ?>
);
    var hideBlocks = new Array(<?php echo $this->_tpl_vars['hideBlocks']; ?>
);

        on_load_init_blocks( showBlocks, hideBlocks );
    
  <?php endif; ?>

  <?php if ($this->_tpl_vars['drupalCms']): ?>
  <?php echo '
    if ( document.getElementsByName("cms_create_account")[0].checked ) {
       show(\'details\');
    } else {
       hide(\'details\');
    }
  '; ?>

  <?php endif; ?>
</script>
<?php endif; ?> 
<?php if ($this->_tpl_vars['drupalCms']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'create_account','trigger_value' => "",'target_element_id' => 'details','target_element_type' => 'block','field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>