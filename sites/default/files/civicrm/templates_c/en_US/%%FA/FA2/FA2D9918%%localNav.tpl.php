<?php /* Smarty version 2.6.14, created on 2010-04-14 13:23:01
         compiled from CRM/common/localNav.tpl */ ?>
<div class="tabs">
    <ul class="tabs primary">
    <?php $_from = $this->_tpl_vars['localTasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['task']):
?>
        <li <?php if ($this->_tpl_vars['task']['class']): ?>class="<?php echo $this->_tpl_vars['task']['class']; ?>
"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['task']['url']; ?>
" <?php if ($this->_tpl_vars['task']['class']): ?>class="<?php echo $this->_tpl_vars['task']['class']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['task']['title']; ?>
</a></li>
    <?php endforeach; endif; unset($_from); ?>
   </ul>
</div>
<br class="clear" />