<?php /* Smarty version 2.6.14, created on 2010-04-15 04:20:08
         compiled from CRM/Profile/Page/Dynamic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'CRM/Profile/Page/Dynamic.tpl', 3, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['row'] )): ?> 
<div id="crm-container" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
">
<fieldset>
<table class="form-layout-compressed">                               
<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['value']):
?>
  <tr><td class="label"><?php echo $this->_tpl_vars['name']; ?>
</td><td><?php echo $this->_tpl_vars['value']; ?>
</td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</fieldset>
</div>
<?php endif; ?> 

<?php echo '
<script type="text/javascript">
function popUp (path) 
{
window.open(path,\'popupWindow\',\'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,copyhistory=no,screenX=150,screenY=150,top=150,left=150\')
}
</script>
'; ?>