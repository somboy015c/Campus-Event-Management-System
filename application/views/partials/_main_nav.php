<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<div class="container">
		<div class="navbar navbar-light navbar-expand">
			<ul class="nav navbar-nav mega-menu col-12">
				<li class="nav-item dropdown menu-li-more col-3">
					<a class="nav-link dropdown-toggle" id="ma" href="<?php echo lang_base_url(); ?>orders" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'Schedules'; ?></a>
				</li>
				<li class="nav-item dropdown menu-li-more col-3">
					<a class="nav-link dropdown-toggle" id="ev" href="<?php echo lang_base_url(); ?>members" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'Events'; ?></a>
				</li>
				<li class="nav-item dropdown menu-li-more col-3">
					<a class="nav-link dropdown-toggle" id="sc" href="<?php echo lang_base_url(); ?>cart" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'My Bookings'; ?></a>
				</li>
				<li class="nav-item dropdown menu-li-more col-3">
					<a class="nav-link dropdown-toggle" id="pr" href="<?php echo lang_base_url(); ?>favorites" role="button" aria-haspopup="true" style="text-align: center; border: 2px solid; border-color: transparent;"><?php echo 'Favorites'; ?></a>
				</li>
			</ul>
		</div>
	</div>


<script>
	tab = '<?php echo $tab; ?>';
	if (tab == 'activity') {
		$('#ma').css('border-bottom-color', '#f86923');
	} else if (tab == 'events') {
		$('#ev').css('border-bottom-color', '#f86923');
	} else if (tab == 'schedule') {
		$('#sc').css('border-bottom-color', '#f86923');
	} else if (tab == 'favorites') {
		$('#pr').css('border-bottom-color', '#f86923');
	}
</script>
