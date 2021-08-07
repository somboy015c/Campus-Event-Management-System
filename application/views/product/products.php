<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Wrapper -->
<div id="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="nav-breadcrumb" aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-products">
						<li class="breadcrumb-item"><a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a></li>
						<?php if (!empty($category)):
							$breadcrumb = get_parent_categories_array($category->id);
							if (!empty($breadcrumb)):
								foreach ($breadcrumb as $item_breadcrumb):
									$item_category = get_category_joined($item_breadcrumb->id);
									if (!empty($item_category)):?>
										<li class="breadcrumb-item"><a href="<?php echo generate_category_url($item_category); ?>"><?php echo html_escape($item_category->name); ?></a></li>
									<?php endif;
								endforeach;
							endif;
						else: ?>
							<li class="breadcrumb-item active" aria-current="page"><?php echo $heading; ?></li>
						<?php endif; ?>
					</ol>
				</nav>
			</div>
		</div>

			<div class="col-12 col-md-12">
				<div class="product-list-content">
					<div class="row row-product">
							<!--print products-->
							<?php foreach ($products as $product): ?>
								<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-product">
								<?php $this->load->view('product/_product_item', ['product' => $product, 'promoted_badge' => true]); ?>
								</div>
							<?php endforeach; ?>
							<?php if (empty($products)): ?>
								<div class="col-12">
									<p class="no-records-found"><?php echo ("No Events Found"); ?></p>
								</div>
							<?php endif; ?>
						</div>
				</div>

				<div class="product-list-pagination" style="margin-top: 0px;">
					<div class="float-right">
						<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
			</div>
		</div>

		<?php echo form_close(); ?>
		<!-- form end -->
	</div>
</div>
<!-- Wrapper End-->
