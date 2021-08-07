<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--print error messages-->
<?php if ($this->session->flashdata('errors')): ?>
    <label style="color: red"><?php echo $this->session->flashdata('errors'); ?></label>
<?php endif; ?>

<!--print custom error message-->
<?php if ($this->session->flashdata('error')): ?>
    <?php if ($this->session->flashdata('error') == "Address in mailbox given [] does not comply with RFC 2822, 3.6.2."): ?>
        <p style="color: red">
                    Please make your email settings from Email Settings Section!
                </p>
    <?php else: ?>
        <label style="color: red"><?php echo $this->session->flashdata('error'); ?></label>
    <?php endif; ?>
    <!--print custom success message-->
<?php elseif ($this->session->flashdata('success')): ?>
    <label style="color: green"><?php echo $this->session->flashdata('success'); ?></label>
<?php endif; ?>
