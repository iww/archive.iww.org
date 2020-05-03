<?php /* Smarty version 2.6.14, created on 2010-04-14 10:55:29
         compiled from CRM/Block/Search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Block/Search.tpl', 16, false),)), $this); ?>
<div class="block-crm">
<?php if ($this->_tpl_vars['config']->includeDojo): ?>
<script type="text/javascript"> 
  dojo.require('dojo.widget.ComboBox');
</script>
<?php endif; ?>
    <form action="<?php echo $this->_tpl_vars['postURL']; ?>
" method="post">
    <div class="form-item">
        <input type="hidden" name="contact_type" value="" />
                <?php if ($this->_tpl_vars['drupalFormToken']): ?>
            <input type="hidden" name="edit[token]" value="<?php echo $this->_tpl_vars['drupalFormToken']; ?>
" />
        <?php endif; ?>
        <input type="text" name="sort_name" class="form-text required" value="" dojoType="ComboBox" mode="remote" dataUrl="<?php echo $this->_tpl_vars['dataURL']; ?>
" />
        <br />
        <input type="submit" name="_qf_Search_refresh" value="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="form-submit" />
        <br />
        <a href="<?php echo $this->_tpl_vars['advancedSearchURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Go to Advanced Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Advanced Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </div>
    </form>
</div>