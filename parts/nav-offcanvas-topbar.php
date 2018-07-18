<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<div class="roof show-for-large">	 
	<?php get_template_part( 'parts/explore', 'ksas' ); ?>
</div>

<div class="top-bar hide-for-print" id="top-bar-menu">
	<div class="small-12 columns" id="logo_nav">
		<div class="row">
			<div class="small-12 large-3 columns">
				<div class="logo">
  					 <?php $theme_option = flagship_sub_get_global_options();
  					 		$shield = $theme_option['flagship_sub_shield'];
							if ('jhu' === $shield ) : ?>
							<a href="http://www.jhu.edu/" title="Johns Hopkins University">
  							<img src="<?php echo get_template_directory_uri() ?>/assets/images/jhu-horizontal.png" alt="Johns Hopkins University">
  						</a>
  					<?php else : ?>
  						<a href="<?php echo network_home_url(); ?>" title="Krieger School of Arts & Sciences">
  							<img src="<?php echo get_template_directory_uri() ?>/assets/images/ksas-horizontal-md.png" alt="Krieger School of Arts and Sciences">
  						</a>
  					<?php endif; ?>
					
				</div>
			</div>
			<div class="small-12 large-9 columns">
				<h1 itemprop="headline">
					<a href="<?php echo site_url(); ?>">
						<?php if ( ! empty( get_bloginfo('description') ) ) : ?>
							<small itemprop="description"><?php echo get_bloginfo( 'description' ); ?></small>
						<?php endif; ?>
						<?php echo get_bloginfo( 'title' ); ?>
					</a>
				</h1>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="top-bar-left show-for-large">
			<?php joints_top_nav_nodropdown(); ?>
		</div>
		<div class="top-bar-left hide-for-large mobile-menu">
			<ul class="menu">
				<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
				<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>