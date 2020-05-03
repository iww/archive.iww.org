<?php /* Smarty version 2.6.14, created on 2010-04-14 13:23:22
         compiled from CRM/common/displaySearchCriteria.tpl */ ?>
<?php $_from = $this->_tpl_vars['qill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sets'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sets']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['setKey'] => $this->_tpl_vars['orClauses']):
        $this->_foreach['sets']['iteration']++;
?>
    <?php if ($this->_foreach['sets']['total'] > 2): ?>
                <?php if (count ( $this->_tpl_vars['orClauses'] ) > 0): ?>
        <ul>
        <li>
        <?php $_from = $this->_tpl_vars['orClauses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['criteria'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['criteria']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['criteria']['iteration']++;
?>
            <?php echo $this->_tpl_vars['item']; ?>

            <?php if (! ($this->_foreach['criteria']['iteration'] == $this->_foreach['criteria']['total'])): ?>
                &nbsp; ... AND ...
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </li>
        </ul>

                <?php if (! ($this->_foreach['sets']['iteration'] == $this->_foreach['sets']['total'])): ?>
            <ul class="menu"><li class="no-display"> 
            <?php if ($this->_tpl_vars['setKey'] == 0): ?>AND<br />
            <?php else: ?>OR<br />
            <?php endif; ?>
            </li></ul>
        <?php endif; ?>
        <?php endif; ?>

    <?php else: ?>
        <ul>
        <?php $_from = $this->_tpl_vars['orClauses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['criteria'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['criteria']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['criteria']['iteration']++;
?>
            <li><?php echo $this->_tpl_vars['item']; ?>

            <?php if (! ($this->_foreach['criteria']['iteration'] == $this->_foreach['criteria']['total'])): ?>
                &nbsp; ... AND ...
            <?php endif; ?>
            </li>
        <?php endforeach; endif; unset($_from); ?>
        </ul>
    <?php endif;  endforeach; endif; unset($_from); ?>