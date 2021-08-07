<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<div class="container" style="padding: 0px; margin: 0px; width: 100% !important;">
		<hr style="margin-top: 0px; margin-bottom: 0px;">
		<div class="navbar-light navbar-expand" style="padding: 0px; margin: 0px;">
			<div class="nav-mobile-inner">
				<ul class="nav navbar-nav mega-menu col-12">
					<li class="nav-item dropdown menu-li-more col-3">
						<a class="nav-link dropdown-toggle" id="ma_m" href="<?php echo lang_base_url(); ?>orders" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'Schedules'; ?></a>
					</li>
					<li class="nav-item dropdown menu-li-more col-3">
						<a class="nav-link dropdown-toggle" id="ev_m" href="<?php echo lang_base_url(); ?>members" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'Events'; ?></a>
					</li>
					<li class="nav-item dropdown menu-li-more col-3">
						<a class="nav-link dropdown-toggle" id="sc_m" href="<?php echo lang_base_url(); ?>cart" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'My Bookings'; ?></a>
					</li>
					<li class="nav-item dropdown menu-li-more col-3">
					<a class="nav-link dropdown-toggle" id="pr_m" href="<?php echo lang_base_url(); ?>favorites" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'Favorites'; ?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>


<script>
	tab = '<?php echo $tab; ?>';
	if (tab == 'activity') {
		$('#ma_m').css('border-bottom-color', '#f86923');
	} else if (tab == 'events') {
		$('#ev_m').css('border-bottom-color', '#f86923');
	} else if (tab == 'schedule') {
		$('#sc_m').css('border-bottom-color', '#f86923');
	} else if (tab == 'favorites') {
		$('#pr_m').css('border-bottom-color', '#f86923');
	}
</script>


