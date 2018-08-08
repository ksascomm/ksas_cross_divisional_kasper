<?php get_header(); ?>
	<div id="content">
		<?php global $blog_id; $kasper = array(124); if (in_array($blog_id, $kasper)) :?>
			<div class="hero">	
				<div class="row">
					<div class="small-12 large-5 columns vertical radius-topright">
						<div class="caption">
							<h3>The Resource Hub</h3>
							<h5>Providing information, resources, and guidance to administrative staff in the Krieger School of Arts and Sciences.</h5>
						</div>
					</div>	

					<div class="large-6 columns">
						<div class="caption">
							<h3>What are you searching for?</h3>
							<p>Search this website for pdfs, links, resources, and more</p>
						
							<form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
								<div class="input-group">
				                	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" data-swplive="true" placeholder="Search this site" aria-label="search"/>
				                	<div class="input-group-button">
				                	<input type="submit" class="button" value="Submit" />
				                	</div>
				                </div>
			                </form>
						</div>
					</div>
				</div>
			</div>		
		<?php endif;?>

    
		<div id="inner-content" class="row">

		    <main id="main" class="small-12 large-8 columns" role="main">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php $frontpagecontent = the_content(); if($frontpagecontent != '') : ?>

						<?php the_content(); ?>	

					<?php endif; ?>
					
				<?php endwhile; endif; ?>	

			   
			    <?php $theme_option = flagship_sub_get_global_options(); //News Query		
					$news_quantity = $theme_option['flagship_sub_news_quantity']; 
					$news_query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $news_quantity)
					); 
				if ( $news_query->have_posts() ) : ?>

				<div class="news-feed">

					<h1 class="feed-title"><?php echo $theme_option['flagship_sub_feed_name']; ?></h1>

					<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
						
							<?php get_template_part( 'parts/loop', 'news' ); ?>
							
					<?php endwhile; ?>

					 <div class="row">
						<h5 class="black">
							<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
								View <?php echo $theme_option['flagship_sub_feed_name']; ?> Archive <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
							</a>
						</h5>
					</div>
				</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'homepage1' ) && is_active_sidebar( 'homepage2' )  ) : ?>
				    <div class="row" id="hp-buckets">
				    	<div class="small-6 columns hide-for-print" role="complementary">
				    		<div class="primary callout">
				    			<?php dynamic_sidebar('homepage1'); ?>
				    		</div> 
						</div>
						<div class="small-6 columns hide-for-print" role="complementary">
							<div class="primary callout">
				    			<?php dynamic_sidebar('homepage2'); ?>
				    		</div> 
						</div>
				    </div>
				<?php endif;?>

			</main> <!-- end #main -->	

			
				<?php if ( is_active_sidebar('homepage0')  ) : ?>
					<aside class="sidebar widget-sidebar small-12 large-4 columns hide-for-print" id="sidebar1"> 
						<?php dynamic_sidebar( 'homepage0' ); ?>
					</aside>
				<?php endif; ?>



		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>