<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="product-item product-item-horizontal">
	<div class="row row-product">
		<div class="col-12 col-sm-4">
			<div class="item-image">
				<?php if ($product->for_sale != 1): ?>
					<a class="item-favorite-button item-favorite-enable <?php echo (is_product_in_favorites($product->id) == true) ? 'item-favorited' : ''; ?>" data-product-id="<?php echo $product->id; ?>"></a>
				<?php endif ?>

				<?php if (!empty($product->post_type)): ?>
					<a class="image-popup lightbox item-view-button" href="<?php echo get_product_image($product->id, 'image_small'); ?>" data-effect="mfp-zoom-out" title="" style="margin-top: 85px; margin-right: 55px;"><i class="icon-eye"></i></a>
					<div class="col-md-12 mb-6 col-sm-12 grid-item">
		                <div class="image_card">
		                    <div class="card_img_hover">
		                        <div class="card_info">
		                            <span class="card_date"><?php echo html_escape($product->created_at); ?></span>
		                        </div>
		                    </div>
		                    <div class="card_img" style="background-image: url('<?php echo get_product_image($product->id, 'image_small'); ?>');"></div>
		                    <a href="<?php echo generate_product_url($product); ?>">
		                        <div class="card_img_hover_sec" style="background-image: url('<?php echo get_product_image($product->id, 'image_small'); ?>');"></div>
		                    </a>
		                </div>
		            </div>
	            <?php else: ?>
					<a href="<?php echo generate_product_url($product); ?>">
						<div class="img-product-container">
							<img src="<?php echo $img_bg_product_small; ?>" data-src="<?php echo get_product_image($product->id, 'image_small'); ?>" alt="<?php echo html_escape($product->title); ?>" class="lazyload img-fluid img-product" onerror="this.src='<?php echo $img_bg_product_small; ?>'">
						</div>
					</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-12 col-sm-6">
			<div class="row-custom item-details">
				<h3 class="product-title">
					<a href="<?php echo generate_product_url($product); ?>"><?php echo html_escape($product->title); ?></a>
				</h3>
				<?php if ($product->is_promoted && $promoted_products_enabled == 1 && isset($promoted_badge) && $promoted_badge == true): ?>
					<span class="badge badge-dark badge-promoted"><?php echo trans("promoted"); ?>&nbsp;&nbsp;&nbsp;(<?php echo date_difference($product->promote_end_date, date('Y-m-d H:i:s')) . " " . trans("days_left"); ?>)</span>
				<?php endif; ?>
				<?php if ($product->for_sale != 1): ?>
					<p class="product-user text-truncate">
						<a href="<?php echo lang_base_url() . "profile" . '/' . html_escape($product->user_slug); ?>">
							<?php echo get_shop_name_product($product); ?>
						</a>
					</p>
					<!--stars-->
					<?php $this->load->view('partials/_review_stars', ['review' => $product->rating]); ?>
				<?php endif ?>
				<div class="item-meta">
					<div class="price-product-item-horizontal">
						<?php $this->load->view('product/_price_product_item', ['product' => $product]); ?>
					</div>
					<?php if ($product->for_sale != 1): ?>
						<?php if ($general_settings->product_reviews == 1): ?>
							<span class="item-comments"><i class="icon-comment"></i>&nbsp;<?php echo get_product_comment_count($product->id); ?></span>
						<?php endif; ?>
						<span class="item-favorites"><i class="icon-heart-o"></i>&nbsp;<?php echo get_product_favorited_count($product->id); ?></span>
					<?php endif ?>
				</div>
			</div>
			<?php if ($product->for_sale != 1 && empty($product->post_type)): ?>
				<label style="padding-top: 10px; padding-left: 10px; font-size: 15px;"><?php echo $product->quantity; ?> Stuck<?php if ($product->quantity > 1){echo "s";} ?> left in Store</label>
			<?php endif; ?>
			<div class="row-custom m-t-10">
				<?php if (!$product->is_promoted && $promoted_products_enabled == 1): if ($product->is_promotion_request == 1): ?>
					<label class="btn btn-sm btn-outline-gray btn-profile-option"><i class="icon-circle"></i>&nbsp;<?php echo ("Processing promotion"); ?></label>
				<?php else: ?>
					<a href="<?php echo lang_base_url() . "promote-product/pricing/" . $product->id; ?>?type=exist" class="btn btn-sm btn-outline-gray btn-profile-option"><i class="icon-plus"></i>&nbsp;<?php echo trans("promote"); ?></a>
				<?php endif; endif; ?>
				<?php if ($product->status == 1): ?>
					<?php if (!$product->is_advert): ?>
						<?php if ($product->is_advert_request == 1): ?>
	                        <label class="btn btn-sm btn-outline-gray btn-profile-option"><i class="icon-circle"></i>&nbsp;<?php echo "Processing Advertisement "; ?></label>
	                    <?php else: ?>
	                        <a href="<?php if ($user->role == 'member'){ $li = 'pending-products';}else{ $li = 'start-selling';} echo lang_base_url() . $li . "?target=" . $product->id; ?>" class="btn btn-sm btn-outline-gray btn-profile-option"><i class="icon-plus"></i>&nbsp;<?php echo ("Advertise"); ?></a>
	                    <?php endif ?>
	                <?php else: ?>
	                    <label class="btn btn-sm btn-outline-gray btn-profile-option"><i class="icon-circle"></i><?php echo ("Advertised"); ?>&nbsp;&nbsp;&nbsp;(<?php echo date_difference($product->advert_end_date, date('Y-m-d H:i:s')) . " " . trans("days_left"); ?>)</label>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ($product->for_sale != 1 && empty($product->post_type)): ?>
					<?php if ($product->is_sold == 1): ?>
						<a href="javascript:void(0)" class="btn btn-sm btn-outline-gray btn-profile-option" onclick="set_product_as_sold(<?php echo $product->id; ?>);"><i class="icon-price-tag"></i>&nbsp;<?php echo trans("set_as_unsold"); ?></a>
					<?php else: ?>
						<a href="javascript:void(0)" class="btn btn-sm btn-outline-gray btn-profile-option" onclick="set_product_as_sold(<?php echo $product->id; ?>);"><i class="icon-price-tag"></i>&nbsp;<?php echo trans("set_as_sold"); ?></a>
				<?php endif; endif; ?>
				<a href="<?php if (!empty($product->post_type)){$tt='?bully=work';} else {$tt='';} echo lang_base_url() . "sell-now/edit-product/" . $product->id . $tt; ?>" class="btn btn-sm btn-outline-gray btn-profile-option"><i class="icon-edit"></i>&nbsp;<?php echo trans("edit"); ?></a>
				<?php if ($product->for_sale == 1 && $product->status == 1 && $user->is_member == 1 && $user->shop_due == 0 && $user->workshop_due == 0): ?>
					<?php echo form_open('product_controller/set_forsale_as_product'); ?>
					<input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
					<button type="submit" class="btn btn-sm btn-outline-gray btn-profile-option"><i class="icon-plus"></i>&nbsp;<?php echo ("Add to Store Products"); ?></button>
					<?php echo form_close(); ?>
				<?php endif; ?>
				<a href="javascript:void(0)" class="btn btn-sm btn-outline-gray btn-profile-option" onclick="delete_product(<?php echo $product->id; ?>,'<?php echo trans("confirm_product"); ?>');"><i class="icon-trash"></i>&nbsp;<?php echo trans("delete"); ?></a>
			</div>
		</div>
	</div>
</div>












