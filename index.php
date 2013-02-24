<?php get_header(); ?>

<div id="main">

    <div class="content">

        <?php if($themeblvd_theme_hints == 'true') : ?>
            <?php echo themeblvd_theme_hints('index'); ?>
        <?php endif; ?>
		
		<!-- HOMEPAGE SORTABLE ELEMENTS (start) -->
	
		<?php
		foreach($themeblvd_homepage_sort as $element) :
		
			switch($element) : 
				
				##############################################################
	            # SLIDESHOW
	            ##############################################################
				
				case "slideshow":
				
				?>
				
					<!-- SLIDESHOW (start) -->
		
			        <div class="slideshow-wrapper">
			
			            <?php echo stealth_slideshow($themeblvd_home_slideshow, $themeblvd_home_slide_transition, $themeblvd_home_slide_speed, $themeblvd_home_color, "930", $height = null, $themeblvd_home_slide_arrows); ?>
			            
			        </div><!-- .slideshow-wrapper (end) -->
					
					<!-- SLIDESHOW (end) -->
					
					<?php break; ?>
					
				<?php
				
				##############################################################
	            # SLOGAN
	            ##############################################################
				
				case "slogan" :
				
				?>
				
					<!-- SLOGAN (start) -->
				
					<div id="slogan">
						
						<div class="slogan-text<?php if(!$themeblvd_homepage_slogan_button) {echo " slogan-center";} ?>">
						
							<?php echo stripslashes($themeblvd_homepage_slogan); ?>
						
						</div><!-- .slogan-text (end) -->
						
						<?php if($themeblvd_homepage_slogan_button) : ?>
						
						<div class="slogan-button">
							
							<a href="<?php echo $themeblvd_homepage_slogan_link; ?>" title="<?php echo $themeblvd_homepage_slogan_button; ?>" class="button">
								<?php echo stripslashes($themeblvd_homepage_slogan_button); ?>
							</a>
							
						</div><!-- .slogan-button (end) -->
						
						<?php endif; ?>
						
						<div class="clear"></div>
						
					</div><!-- #slogan (end) -->
				
					<!-- SLOGAN (end) -->
					
					<?php break; ?>
					
				<?php
			
				##############################################################
	            # WIDGETS
	            ##############################################################
				
				case "widgets" :
				
				?>
				
					<!-- HOMEPAGE COLUMNS (start) -->
	
					<div id="home-widget-columns">
						
						<?php themeblvd_widget_columns_display("homepage", $themeblvd_homepage_columns); ?>
						
					</div><!-- .widget-area (end) -->
					
					<div class="clear"></div>
					
					<!-- HOMEPAGE COLUMNS (end) -->
					
					<?php break; ?>
				
				<?php
				
				##############################################################
	            # PAGE CONTENT
	            ##############################################################
				
				case "page" :
				
				?>
					
					<!-- HOMEPAGE CONTENT (start) -->
		
					<div id="full-width-content">
						
						<?php if($themeblvd_homepage_page_id) : ?>
							
							<?php $page = get_page($themeblvd_homepage_page_id); ?>
							
							<?php echo apply_filters('the_content', $page->post_content); ?>
							
						<?php else : ?>
							
							<p class="warning">
				            	<?php _e("You need to select a page to pull content from for this area or hide this section all together. You can do all this in the Homepage section of your theme options page.", "themeblvd"); ?>
							</p>
						
						<?php endif; ?>
						
						<div class="clear"></div>
						
					</div><!-- #home-content (end) -->
					
					<div class="clear"></div>
					
					<!-- HOMEPAGE CONTENT (end) -->
					
					<?php break; ?>
					
				<?php
				
				##############################################################
	            # FEATURED POSTS
	            ##############################################################
				
				case "featured" :
				
				?>
				
					<!-- FEATURED POSTS (start) -->
					
					<div class="featured-wrapper">

			            <?php stealth_featured_posts($themeblvd_home_featured_tag, $themeblvd_home_featured_type); ?>
			
			        </div><!-- .featured-wrapper (end) -->
					
					<!-- FEATURED POSTS (end) -->
					
					<?php break; ?>
			
				<?php
				
				##############################################################
	            # BLOG + SIDEBAR
	            ##############################################################
				
				case "blog" :
				
				?>
				
					<!-- HOMEPAGE BLOG (start) -->
					
					<?php if($themeblvd_sidebar == 'left') : ?>
						<?php get_sidebar(); ?>	
					<?php endif; ?>
					
					<div id="content">
						
						<?php
					    if ( get_query_var('paged') ) {
					
					        $paged = get_query_var('paged');
					
					    } elseif ( get_query_var('page') ) {
					
					        $paged = get_query_var('page');
					
					    } else {
					
					        $paged = 1;
					
					    }
					    
					    //Blog it up
				    	global $more;
				    	$more = 0;
					
					    query_posts( array( 'post_type' => 'post', 'paged' => $paged) );
					
					    if ( have_posts() ) : while ( have_posts() ) : the_post();
					    ?>
					    
					    <div class="entry">

					        <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
					
					        <div class="content">
					
					            <div class="meta">
					                <span class="left">
					                    <span class="date">
					                        <?php the_time(get_option('date_format')); ?>
					                    </span>
					                </span>
					                <span class="right">
					                    <span class="author">
					                        <?php _e('by ', 'themeblvd'); ?><?php the_author(); ?>
					                    </span>
					                    <span class="comments">
					                        <a href="<?php the_permalink(); ?>#comments-wrap">
					                            <?php comments_number( __("No Comments", "themeblvd"), __("1 Comment", "themeblvd"), __("% Comments", "themeblvd") ); ?>
					                        </a>
					                    </span>
					                </span>
					            </div><!-- .meta (end) -->
					
					            <?php if ( has_post_thumbnail() ) : ?>
					                <?php the_post_thumbnail('blog'); ?>
					            <?php endif; ?>
					
					            <?php if($themeblvd_blog_content == 'content') : ?>
			                	
				                    <?php the_content(); ?>
				                    
								<?php else : ?>
									
									<?php the_excerpt(); ?>
				
				                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button">
				                    	<?php _e('Read more', 'themeblvd'); ?>
				                    </a>
				                    
								<?php endif;?>
					
					        </div><!-- .content (end) -->
					
					    </div><!-- .entry (end) -->
					    
					    
					    <?php endwhile; ?>
				
					    <div class="clear"></div>
					
					    <!-- Link to Blog -->
					    <?php if($themeblvd_homepage_blog_link == 'yes') : ?>
					    <div class="nav-entries">
				            <a href="<?php echo $themeblvd_homepage_blog_url; ?>" title="<?php echo $themeblvd_homepage_blog_text; ?>">
				            	<?php echo $themeblvd_homepage_blog_text; ?>
				            </a>
				        </div>
				        <?php endif; ?>
					
					    <?php else : ?>
					    	<p class="warning">
					    		<?php _e('There are no posts to show.', "themeblvd"); ?>
					    	</p>
					    <?php endif; ?>
							
						</div><!-- #content (end) -->
						
						<?php if($themeblvd_sidebar == 'right') : ?>
							<?php get_sidebar(); ?>	
						<?php endif; ?>
						
						<div class="clear"></div>
						
						<!-- HOMEPAGE BLOG (end) -->
					
						<?php break; ?>
			
			<?php 
			endswitch;
			
		endforeach;
		?>
		
		<!-- HOMEPAGE SORTABLE ELEMENTS (end) -->

    </div><!-- .content (end) -->

</div><!-- #main (end) -->

<?php get_footer(); ?>