<?php
/**
 * Everything in this file is copied from Theme Blvd 
 * framework v2.2.1 temporarily until this theme gets 
 * completely re-done to work on the new framework.
 */

/**
 * Get Recent Tweets
 *
 * @param string $count Number of tweets to display
 * @param string $username Twitter username to pull tweets from
 * @param string $time Display time of tweets, yes or no
 * @param string $exclude_replies Exclude replies, yes or no
 * @return string $output Final list of tweets
 */

if( ! function_exists( 'themeblvd_get_twitter' ) ) {
	function themeblvd_get_twitter( $count, $username, $time = 'yes', $exclude_replies = 'yes' ) {		

		$filtered_message = null;
		$output = null;
		$iterations = 0;
		$tweets = array();
		
		// Use WordPress's SimplePie integration to retrieve Tweets
		$rss = fetch_feed( themeblvd_get_twitter_rss_url( $username ) );
		
		// Proceed if we could retrieve the RSS feed
		if ( ! is_wp_error( $rss ) ) {
		
			// Setup items from fetched feed
			$maxitems = $rss->get_item_quantity();
			$rss_items = $rss->get_items(0, $maxitems);
			
			// Build Tweets array for display
			if( $rss_items ) {
				foreach ( $rss_items as $item ) {
					// Only continue if we haven't reached the max number of tweets
					if( $iterations == $count ) break;
					// Set text of tweet
					$text = (string) $item->get_title();
					$text = str_ireplace( $username.': ', '', $text );
					// Take "Exclude @ replies" option into account before adding 
					// tweet and increasing current number of tweets.
					if( $exclude_replies == 'no' || ( $exclude_replies == 'yes' && $text[0] != "@") ) {
					    $iterations++;
					    $tweets[] = array(
					    	'link' => $item->get_permalink(),
					    	// 'text' => apply_filters( 'themeblvd_tweet_filter', $text, $username ),
					    	'text' => themeblvd_tweet_filter_default( $text, $username ),
					    	'date' => $item->get_date( get_option('date_format') )
					    );
					}
				}
			}
			
			// Start output of tweets
			if( $tweets ) {	
				foreach( $tweets as $tweet) {	
					$output .= '<li class="tweet">';
					$output .= '<div class="tweet-wrap">';
					$output .= '<div class="tweet-text">'.$tweet['text'].'</div>';
					if( $time == 'yes' ) $output .= '<div class="tweet-time"><a href="'.$tweet['link'].'" target="_blank">'.$tweet['date'].'</a></div>';
					$output .= '</div><!-- .tweet-wrap (end) -->';
					$output .= '</li>';
				}
			}
			
			// Finish up output
			if( $output )
				$output = '<ul class="tweets">'.$output.'</ul>';
			else
				$output = '<ul class="tweets"><li>'.__( 'No public Tweets found', 'themeblvd' ).'</li></ul>';
			
		} else {
			// Received error with fetch_feed()
			$output = '<ul class="tweets"><li>'.__( 'Could not fetch Twitter RSS feed.', 'themeblvd' ).'</li></ul>';
		}
		return $output;
	}
}

/**
 * Display Recent Tweets
 *
 * @param string $count Number of tweets to display
 * @param string $username Twitter username to pull tweets from
 * @param string $time Display time of tweets, yes or no
 * @param string $exclude_replies Exclude replies, yes or no
 * @return string $filtered_tweet Final list of tweets
 */

if( ! function_exists( 'themeblvd_twitter' ) ) {
	function themeblvd_twitter( $count, $username, $time = 'yes', $exclude_replies = 'yes' ) {	
		echo themeblvd_get_twitter( $count, $username, $time, $exclude_replies );
	}
}

/**
 * Get the Twitter RSS URL
 */

if( ! function_exists( 'themeblvd_get_twitter_rss_url' ) ) {
	function themeblvd_get_twitter_rss_url( $username ) {
		
		// Non API version, but tweets expire eventually. Can safely use this 
		// without transients working on server, because Twitter never cuts 
		// you off with this one.
		// $url = 'http://search.twitter.com/search.atom?q=from:'.$username;
		
		// Use API, tweets never expire, but transients must work properly 
		// on server. Sometimes there's issues with transients when using 
		// W3 Total Cache.
		$url = 'http://api.twitter.com/1/statuses/user_timeline.rss?screen_name='.$username; 
		
		// Return with filter applied so it's possible to change your 
		// RSS method from a Child theme or plugin.
		return apply_filters( 'themeblvd_twitter_rss', $url, $username );
	}
}

/**
 * Filter Tweets
 * 
 * Special thanks to Allen Shaw & webmancers.com & Michael Voigt
 * The only mods from Allen and Michael I made are changing the 
 * links to open in new windows.
 *
 * @param string $text Tweet to filter
 * @return string $text Filtered tweet 
 */

if( ! function_exists( 'themeblvd_tweet_filter_default' ) ) {
	function themeblvd_tweet_filter_default( $text, $username ) {
		
		// Removed any HTML special characters
		$text = htmlspecialchars_decode( $text, ENT_QUOTES );
		
		// Remove "UserName: " from Twitter API RSS on start of every tweet
		$text = str_ireplace( $username.': ', '', $text );
		
		// Format URL's to be links - http://whatever.com
		$text = preg_replace('/\b([a-zA-Z]+:\/\/[\w_.\-]+\.[a-zA-Z]{2,6}[\/\w\-~.?=&%#+$*!]*)\b/i',"<a href=\"$1\" class=\"twitter-link\" target=\"_blank\">$1</a>", $text);
		
		// Format URL's to be links - http://www.whatever.com
		$text = preg_replace('/\b(?<!:\/\/)(www\.[\w_.\-]+\.[a-zA-Z]{2,6}[\/\w\-~.?=&%#+$*!]*)\b/i',"<a href=\"http://$1\" class=\"twitter-link\" target=\"_blank\">$1</a>", $text);    
		
		// Format emails - you@yourmail.com
		$text = preg_replace("/\b([a-zA-Z][a-zA-Z0-9\_\.\-]*[a-zA-Z]*\@[a-zA-Z][a-zA-Z0-9\_\.\-]*[a-zA-Z]{2,6})\b/i","<a href=\"mailto://$1\" class=\"twitter-link\">$1</a>", $text);
		
		// Format hash tags as links - #whatever
		$text = preg_replace("/#(\w+)/", "<a class=\"twitter-link\" href=\"http://search.twitter.com/search?q=\\1\" target=\"_blank\">#\\1</a>", $text);
		
		// Format @username as links
		$text = preg_replace("/@(\w+)/", "<a class=\"twitter-link\" href=\"http://twitter.com/\\1\" target=\"_blank\">@\\1</a>", $text);

	    return $text;
	}
}

/**
 * This adjusts WordPress's transient lifetime for fetch_feed() 
 * from 12 hours to 2 hours. This was primarily implemented to 
 * work with the framework's retrieval of Twitter feeds. 
 *
 * This function is used to filter: wp_feed_cache_transient_lifetime
 */

if( ! function_exists( 'themeblvd_feed_transient' ) ) {
	function themeblvd_feed_transient( $seconds ) {
		// Change the default feed cache recreation period to 2 hours
		return 7200;
	}
}
add_filter( 'wp_feed_cache_transient_lifetime' , 'themeblvd_feed_transient' );