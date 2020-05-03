<?php // $Id$

/**
 * @file
 * Theme implementation to display a box.
 *
 * Available variables:
 * - $title: Box title.
 * - $content: Box content.
 *
 * @see template_preprocess()
 */
?>
<div class="box"><div class="box-inner">
  <?php if ($title): ?>
    <h2 class="box-title title"><?php print $title ?></h2>
  <?php endif; ?>
  <?php print $content ?>
</div></div>
