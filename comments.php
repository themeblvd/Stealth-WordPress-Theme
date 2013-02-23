<div id="comments-wrap">

    <?php global $themeblvd_theme_hints; ?>
    <?php if($themeblvd_theme_hints == 'true') : ?>
        <?php echo themeblvd_theme_hints('comments'); ?>
    <?php endif; ?>

<?php
	$req = get_option('require_name_email'); // Checks if fields are required.
	if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
		die ( 'Please do not load this page directly. Thanks!' );
	if ( ! empty($post->post_password) ) :
		if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
?>
				<div class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'themeblvd') ?></div>
			</div><!-- .comments -->
<?php
		return;
	endif;
endif;
?>

<?php if ( have_comments() ) : ?>

<?php /* numbers of pings and comments */
$ping_count = $comment_count = 0;
foreach ( $comments as $comment )
	get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;
?>

<?php if ( ! empty($comments_by_type['comment']) ) : ?>

				<div id="comments-list" class="comments">
					<h3><?php printf($comment_count > 1 ? __('<span>%d</span> Comments', 'themeblvd') : __('<span>One</span> Comment', 'themeblvd'), $comment_count) ?></h3>
					
<?php $total_pages = get_comment_pages_count(); if ( $total_pages > 1 ) : ?>					
					<div id="comments-nav-above" class="comments-navigation">
								<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
					</div><!-- #comments-nav-above -->					
<?php endif; ?>					
				
					<ol class="commentlist">
<?php wp_list_comments('type=comment&callback=custom_comments'); ?>
					</ol>

<?php $total_pages = get_comment_pages_count(); if ( $total_pages > 1 ) : ?>					
	  			<div id="comments-nav-below" class="comments-navigation">
						<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
	        </div><!-- #comments-nav-below -->
<?php endif; ?>					
					
				</div><!-- #comments-list .comments -->

<?php endif; /* if ( $comment_count ) */ ?>

<?php if ( ! empty($comments_by_type['pings']) ) : ?>

				<div id="trackbacks-list" class="comments">
					<h3><?php printf($ping_count > 1 ? __('<span>%d</span> Trackbacks', 'themeblvd') : __('<span>One</span> Trackback', 'themeblvd'), $ping_count) ?></h3>
					
					<ol>
<?php wp_list_comments('type=pings&callback=custom_pings'); ?>
					</ol>				
					
				</div><!-- #trackbacks-list .comments -->			


<?php endif /* if ( $ping_count ) */ ?>
<?php endif /* if ( $comments ) */ ?>

<?php if ( 'open' == $post->comment_status ) : ?>
				<div id="respond" class="rounded-10">
					<div class="pad">
					
					
    				<h3><?php comment_form_title( __('Post a Comment', 'flipblog'), __('Post a Reply to %s', 'themeblvd') ); ?></h3>
    				
    				<div id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
					<p id="login-req"><?php printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'themeblvd'),
					get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>

<?php else : ?>
					

						<form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" class="comments-form" method="post">

<?php if ( $user_ID ) : ?>
							<p id="login"><?php printf(__('<span class="loggedin">Logged in as <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'themeblvd'),
								get_option('siteurl') . '/wp-admin/profile.php',
								esc_html($user_identity, true),
								wp_logout_url(get_permalink()) ) ?></p>

<?php else : ?>

							<p id="comment-notes"><?php _e('Your email is <em>never</em> published or shared.', 'themeblvd') ?> <?php if ($req) _e('Required fields are marked <span class="required">*</span>', 'themeblvd') ?></p>
							
							
						<fieldset>
				            <ol>              
          						<!-- AUTHOR (start) -->
          
          						<li>
                                    <label for="author"><?php _e('Name', 'flipblog') ?><?php if ($req) _e('*', 'themeblvd') ?></label>
                                    <input type="text" name="author" id="author" value="<?php echo $comment_author ?>" <?php if ($req) _e('class="required"', 'themeblvd') ?> />
                                </li>
          
          						<!-- AUTHOR (end) -->
              
								<!-- EMAIL (start) -->
												              
								<li>
                                    <label for="email"><?php _e('Email', 'themeblvd') ?><?php if ($req) _e('*', 'themeblvd') ?></label>
                                    <input type="text" name="email" id="email" value="<?php echo $comment_author_email ?>" class="required email" />
                                </li>				              
												              
								<!-- EMAIL (end) -->
              
								<!-- URL (start) -->
								
								<li>
                                    <label for="url"><?php _e('URL', 'themeblvd') ?></label>
                                    <input type="text" name="url" id="url" class="url" value="<?php echo $comment_author_url ?>" />
                                </li>
								
								<!-- URL (end) -->
              

<?php endif /* if ( $user_ID ) */ ?>
              
								<!-- COMMENT (start) -->
								
								<li>
	                                <label for="comment"><?php _e('Comment', 'themeblvd') ?>*</label>
	                                <textarea name="comment" id="comment" class="required" rows="" cols=""></textarea>
	                            </li>
								
								<!-- COMMENT (end) -->
              
              <!--
              <div id="form-allowed-tags" class="form-section">
	              <p><span><?php _e('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'themeblvd') ?></span> <code><?php echo allowed_tags(); ?></code></p>
              </div>
              -->
							
<?php do_action('comment_form', $post->ID); ?>
								
								<!-- SUBMIT (start) -->
								
								<li>
                                	<label for="submit">&nbsp;</label>
                                    <input type="submit" id="submit" value="<?php _e('Post Comment', 'themeblvd') ?>" />
                                    <input type="hidden" name="submitted" id="submitted" value="true" />
                                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                                </li>
							
								<!-- SUBMIT (end) -->
<?php comment_id_fields(); ?>    
								
								</ol>
							</fieldset>
						</form><!-- #commentform -->									

<?php endif /* if ( get_option('comment_registration') && !$user_ID ) */ ?>
				
					</div><!-- .pad (end) -->
                </div><!-- #respond (end) -->

<?php endif /* if ( 'open' == $post->comment_status ) */ ?>


</div><!-- #comments-wrap (end) -->
