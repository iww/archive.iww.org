<?php /* Smarty version 2.6.14, created on 2010-04-14 10:55:29
         compiled from CRM/Block/Shortcuts.tpl */ ?>
<div class="menu">
<ul class="indented">
<?php $_from = $this->_tpl_vars['shortCuts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['short']):
?>
    <li class="leaf"><a href="<?php echo $this->_tpl_vars['short']['url']; ?>
"><?php echo $this->_tpl_vars['short']['title']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>