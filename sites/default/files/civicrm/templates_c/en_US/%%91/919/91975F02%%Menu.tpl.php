<?php /* Smarty version 2.6.14, created on 2010-04-14 10:55:29
         compiled from CRM/Block/Menu.tpl */ ?>
<div class="menu">
<ul class="indented">
<?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menuItem']):
 if ($this->_tpl_vars['menuItem']['start']): ?><li class="no-display"><ul class="indented"><?php endif; ?>
<li class="<?php echo $this->_tpl_vars['menuItem']['class']; ?>
"><a href="<?php echo $this->_tpl_vars['menuItem']['url']; ?>
" <?php echo $this->_tpl_vars['menuItem']['active']; ?>
><?php echo $this->_tpl_vars['menuItem']['title']; ?>
</a></li>
<?php if ($this->_tpl_vars['menuItem']['end']): ?></ul></li><?php endif;  endforeach; endif; unset($_from); ?>
</ul>
</div>