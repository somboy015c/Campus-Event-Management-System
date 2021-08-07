<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Wrapper -->
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="nav-breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><?php echo 'Event Categories'; ?></li>
                    </ol>
                </nav>

                        <div class="product-list-content">
                            <div class="bn-lg <?php echo(isset($class) ? $class : ''); ?>" style="min-width: 0px; text-align: left;">     
                                <div class="row row-product">
                                    <!--print members-->
                                    <?php if (!empty($categories)): ?>
                                        <?php foreach ($categories as $category): ?>
                                            <div class="col-md-4 col-sm6 col-12">
                                                <?php $this->load->view('partials/_card', ['category' => $category]); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="col-12">
                                            <p class="no-records-found">
                                                <?php echo ("No Events Found"); ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="bn-md <?php echo(isset($class) ? $class : ''); ?>" style="min-width: 0px; text-align: left;">
                                <div class="span-sort-by product-sort-by">
                                    <div class="main-menu">
                                        <div class="row row-product">
                                            <!--print members-->
                                            <?php if (!empty($categories)): ?>
                                                <?php foreach ($categories as $category): ?>
                                                    <div class="col-md-4 col-sm6 col-12" style="padding-right: 5px; padding-left: 5px;">
                                                        <?php $this->load->view('partials/_card', ['category' => $category]); ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <div class="col-12">
                                                    <p class="no-records-found">
                                                        <?php echo ("No Events Found"); ?>
                                                    </p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="mobile-menu">
                                        <div class="row row-product">
                                            <!--print members-->
                                            <?php if (!empty($categories)): ?>
                                                <?php foreach ($categories as $category): ?>
                                                    <div class="col-md-6 col-sm6 col-12">
                                                        <?php $this->load->view('partials/_card', ['category' => $category]); ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <div class="col-12">
                                                    <p class="no-records-found">
                                                        <?php echo ("No Events Found"); ?>
                                                    </p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-filter-products-mobile" style="background-color: transparent !important; float: unset; border: 0px;">
                                    <div class="row row-product">
                                        <!--print members-->
                                        <?php if (!empty($categories)): ?>
                                            <?php foreach ($categories as $category): ?>
                                                <div class="col-6">
                                                    <?php $this->load->view('partials/_card', ['category' => $category]); ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <div class="col-12">
                                                <p class="no-records-found">
                                                    <?php echo ("No Store Found"); ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="bn-sm <?php echo(isset($class) ? $class : ''); ?>" style="min-width: 0px; text-align: left;">
                                <div class="row row-product">
                                    <!--print members-->
                                    <?php if (!empty($categories)): ?>
                                        <?php foreach ($categories as $category): ?>
                                            <div class="col-md-6 col-sm6 col-12">
                                                <?php $this->load->view('partials/_card', ['category' => $category]); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="col-12">
                                            <p class="no-records-found">
                                                <?php echo ("No Store Found"); ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<!-- Wrapper End-->


