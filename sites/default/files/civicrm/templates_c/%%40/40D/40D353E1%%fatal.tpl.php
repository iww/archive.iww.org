<?php /* Smarty version 2.6.14, created on 2010-11-28 03:47:48
         compiled from CRM/common/fatal.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <title>CiviCRM Fatal Error</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<div id="crm-container">

<div style="border: solid 2px black; padding: 1em 1em 1em 1em;">
      <p style="color: red; font-weight: bold;">Sorry. A non-recoverable error has occurred.</p>
      <p>Please review the <a href="http://wiki.civicrm.org/confluence//x/mQ8" target="_blank">CiviCRM Installation Guide</a> and try searching
      the <a href="http://www.nabble.com/CiviCRM-Community-Mailing-List-Archives-f15986.html" target="_blank">CiviCRM Mailing List Archives</a> for information on the error below.</p>
<?php if ($this->_tpl_vars['message']): ?>
    <hr style="solid 1px" />
    <p><?php echo $this->_tpl_vars['message']; ?>
</p>
<?php endif;  if ($this->_tpl_vars['code']): ?>
    <hr style="solid 1px" />
    <p>Error Code: <?php echo $this->_tpl_vars['code']; ?>
</p>
<?php endif;  if ($this->_tpl_vars['mysql_code']): ?>
    <hr style="solid 1px" />
    <p>Database Error Code: <?php echo $this->_tpl_vars['mysql_code']; ?>
</p>
<?php endif;  if ($this->_tpl_vars['error']): ?>
    <hr style="solid 1px" />
    <p>Error Details:</p>
    <p><?php echo $this->_tpl_vars['error']['to_string']; ?>
</p>
<?php endif; ?>
</div>

</div> 
</body>
</html>