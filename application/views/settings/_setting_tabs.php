<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>




<div class="main-menu">
    <div class="profile-tabs">
        <ul class="nav">
            <li class="nav-item <?php echo ($active_tab == 'update_profile') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo lang_base_url(); ?>settings">
                    <span><?php echo trans("update_profile"); ?></span>
                </a>
            </li>
            <li class="nav-item <?php echo ($active_tab == 'contact_informations') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/contact-informations">
                    <span><?php echo trans("contact_informations"); ?></span>
                </a>
            </li>
            <li class="nav-item <?php echo ($active_tab == 'shipping_address') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/shipping-address">
                    <span><?php echo trans("shipping_address"); ?></span>
                </a>
            </li>
            <li class="nav-item <?php echo ($active_tab == 'change_password') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/change-password">
                    <span><?php echo trans("change_password"); ?></span>
                </a>
            </li>
        </ul>
    </div>
</div>




<div class="mobile-menu" style="padding: 0px;">
    <div class="span-sort-by product-sort-by" style=" float: none; ">
        <div class="profile-tabs">
            <ul class="nav">
                <li class="nav-item <?php echo ($active_tab == 'update_profile') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo lang_base_url(); ?>settings">
                        <span><?php echo trans("update_profile"); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active_tab == 'contact_informations') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/contact-informations">
                        <span><?php echo trans("contact_informations"); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active_tab == 'shipping_address') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/shipping-address">
                        <span><?php echo trans("shipping_address"); ?></span>
                    </a>
                </li>
                <li class="nav-item <?php echo ($active_tab == 'change_password') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo lang_base_url(); ?>settings/change-password">
                        <span><?php echo trans("change_password"); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>






    <div class="btn-filter-products-mobile" style="background-color: transparent !important; float: none; border: 0px; margin-left: 0px;">
        <div class="col-12" style="padding: 0px;">
            <div class="nav-mobile-inner">
                <ul class="nav">
                    <div class="col-12"style="padding: 0px; margin: 0px;">
                        <div class="row-custom"style="padding: 0px; margin: 0px;">
                            <div id="blog-slider4" class="owl-carousel blog-slider" style="max-height: 40px; font-size: 12px; padding-top: 5px; overflow: hidden;">
                                <!--print blog slider posts-->
                                <li class="nav-item <?php echo ($active_tab == 'update_profile') ? 'active' : ''; ?>" style="overflow: hidden;">
                                    <a class="nav-link btn btn-md btn-outline-gray" href="<?php echo lang_base_url(); ?>settings" style="<?php if ($active_tab == 'update_profile') {echo 'border-bottom-color: red;';} ?> font-size: 10px; height: 31px; vertical-align: middle; padding-top: 7px;">
                                        <span><?php echo ("Update&nbsp;Profile"); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo ($active_tab == 'contact_informations') ? 'active' : ''; ?>" style="overflow: hidden;">
                                    <a class="nav-link btn btn-md btn-outline-gray" href="<?php echo lang_base_url(); ?>settings/contact-informations" style="<?php if ($active_tab == 'contact_informations') {echo 'border-bottom-color: red;';} ?> font-size: 10px; height: 31px; vertical-align: middle; padding-top: 7px;">
                                        <span><?php echo ("Contact&nbsp;info."); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo ($active_tab == 'shipping_address') ? 'active' : ''; ?>" style="overflow: hidden;">
                                    <a class="nav-link btn btn-md btn-outline-gray" href="<?php echo lang_base_url(); ?>settings/shipping-address" style="<?php if ($active_tab == 'shipping_address') {echo 'border-bottom-color: red;';} ?> font-size: 10px; height: 31px; vertical-align: middle; padding-top: 7px;">
                                        <span><?php echo ("shipping&nbsp;add.."); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php echo ($active_tab == 'change_password') ? 'active' : ''; ?>" style="overflow: hidden;">
                                    <a class="nav-link btn btn-md btn-outline-gray" href="<?php echo lang_base_url(); ?>settings/change-password" style="<?php if ($active_tab == 'change_password') {echo 'border-bottom-color: red;';} ?> font-size: 10px; height: 31px; vertical-align: middle; padding-top: 7px;">
                                        <span><?php echo ("Change&nbsp;Pass.."); ?></span>
                                    </a>
                                </li>
                                <li></li>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <hr style="margin: 0px; padding: 0px;">
        </div>
    </div>
</div>