<?php /* Smarty version 2.6.14, created on 2010-02-17 19:25:52
         compiled from CRM/Form/body.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Form/body.tpl', 11, false),)), $this); ?>
<?php if ($this->_tpl_vars['form']['javascript']): ?>
  <?php echo $this->_tpl_vars['form']['javascript']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['form']['hidden']): ?>
  <div><?php echo $this->_tpl_vars['form']['hidden']; ?>
</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['form']['errors'] ) > 0): ?>
   <div class="messages error">
   <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please correct the following errors in the form fields below:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
   <ul id="errorList">
   <?php $_from = $this->_tpl_vars['form']['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['error']):
?>
      <?php if (is_array ( $this->_tpl_vars['error'] )): ?>
         <li><?php echo $this->_tpl_vars['error']['label']; ?>
 <?php echo $this->_tpl_vars['error']['message']; ?>
</li>
      <?php else: ?>
         <li><?php echo $this->_tpl_vars['error']; ?>
</li>
      <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
   </ul>
   </div>
<?php endif; ?>