jQuery.noConflict()(function(){

    jQuery(document).ready(function() {
        
        // ---------------------------------------------------------
        // Innitiate Dropdown menu 
        // ---------------------------------------------------------

        jQuery('#menu-wrapper .menu').superfish();

        // ---------------------------------------------------------
        // Fade hover on linked images
        // ---------------------------------------------------------

        //Thumbnail hover
        jQuery('#content .content a img').hover(function() {

           jQuery(this).stop(true, true).animate({opacity:0.7},400);

        }, function() {

            jQuery(this).stop(true, true).animate({opacity:1},400);

        });

        // ---------------------------------------------------------
        // Integrate lightbox into WordPress [gallery] shortcode
        // ---------------------------------------------------------

        jQuery('.gallery-item a').each(function(){
            if(this.href.match(/\.(jpe?g|png|bmp|gif|tiff?)$/i)){
                jQuery(this).attr('rel','lightbox[gallery]');
            }
            jQuery(this).find('img').addClass('pretty');
        });

        // ---------------------------------------------------------
        // Innitiate lightbox plugin
        // ---------------------------------------------------------

        jQuery("a[rel^='lightbox']").prettyPhoto({
            theme: 'light_square',
            show_title: false,
            opacity: .50,
            gallery_markup:'<div class="pp_gallery"> \
                                <a href="#" class="pp_arrow_previous">Previous</a> \
                                <a href="#" class="pp_arrow_next">Next</a> \
                            </div>'
        });

        // ---------------------------------------------------------
        // Comments Form
        // ---------------------------------------------------------

        //Activate jQuery form validation
        jQuery(".comments-form").validate();

        // ---------------------------------------------------------
        // Contact Form
        // ---------------------------------------------------------

        //Define URL to PHP mail file
        url = jQuery("meta[name=template_url]").attr('content') + "/sendmail.php";

        //Activate jQuery form validation
        jQuery("#jaybich-contact").validate({

            submitHandler: function() {

                //Define data string
                var datastring = jQuery("#jaybich-contact").serialize();

                //Submit form
                jQuery.ajax({
                    type: "POST",
                    url: url,
                    data: datastring,
                    success: function(){
                            jQuery('#jaybich-contact').slideUp();
                            jQuery('#sent').fadeIn();
                    }
                });
            }

        });


        // ---------------------------------------------------------
        // Portfolio Thumbnail
        // ---------------------------------------------------------

        //Hide images innitially
        jQuery(".thumb .enlarge").css({opacity:0});

        //When loaded
        jQuery(window).load(function() {

            jQuery('a.thumb-media').each(function(){

                //Fade in image
                jQuery(this).find('.enlarge').animate({opacity:1}, 1000);

                //Add class for enlarge video or image
                if(this.href.match(/\.(jpe?g|png|bmp|gif|tiff?)$/i)){
                    jQuery(this).find('.enlarge').addClass('image');
                } else {
                    jQuery(this).find('.enlarge').addClass('video');
                }

            });

            jQuery('a.thumb').each(function(){

                //Fade in image
                jQuery(this).find('.enlarge').animate({opacity:1}, 1000);

            });


        });

        //Thumbnail hover
        jQuery('a.thumb').hover(function() {

            //Show darkenned hover over thumbnail image
            jQuery(this).find('img').stop(true, true).animate({opacity:0.5},400);

        }, function() {

            //Hide darkenned hover over thumbnail image
            jQuery(this).find('img').stop(true, true).animate({opacity:1},400);

        });


        // ---------------------------------------------------------
        // Featured Posts
        // ---------------------------------------------------------

        jQuery('.featured-wrapper .entry').each(function(){

            jQuery(this).hover(function() {

                jQuery(this).find('.description').stop(true, true).animate({ top : "0" }, 500);

            }, function() {

                jQuery(this).find('.description').stop(true, true).animate({ top : "110px" }, 500);

            });         

        });


        // ---------------------------------------------------------
        // Tabs
        // ---------------------------------------------------------

        jQuery(".themeblvd-tabs").each(function(){

            jQuery(this).find(".tab").hide();
            jQuery(this).find(".tab-menu li:first a").addClass("active").show();
            jQuery(this).find(".tab:first").show();

        });

        jQuery(".themeblvd-tabs").each(function(){

            jQuery(this).find(".tab-menu a").click(function() {

                jQuery(this).parent().parent().find("a").removeClass("active");
                jQuery(this).addClass("active");
                jQuery(this).parent().parent().parent().parent().find(".tab").hide();
                var activeTab = jQuery(this).attr("href");
                jQuery(activeTab).fadeIn();
                return false;
                
            });

        });
        
        // ---------------------------------------------------------
        // Toggle
        // ---------------------------------------------------------
        
        jQuery(".themeblvd-toggle").each(function(){

            jQuery(this).find(".box").hide();
            
        });

        jQuery(".themeblvd-toggle").each(function(){

            jQuery(this).find(".trigger").click(function() {

                jQuery(this).toggleClass("active").next().stop(true, true).slideToggle("slow");

                return false;

            });

        });


    }); // End DOM ready

}); //End noConflict()

// ----------------------------------------------------------------------------
// Run Slideshow - Works with stealth_slideshow() PHP function
// ----------------------------------------------------------------------------

function runSlideshow(id, transition, speed) {
    jQuery.noConflict()(function(){

        jQuery(document).ready(function(){

            function onBefore(){
                var ht = jQuery(this).height();
                jQuery(this).parent().animate({
                    height: ht
                 }, 1000);
            }

            jQuery('#'+id+' .slideshow').cycle({
                fx: transition,                         //Transition effect
                timeout: speed,                         //Time between transitions in milliseconds
                pager: '#'+id+' .slideshow-nav-inner',  //Element where navigation will be inserted
                next: '.slide-next',                    //Next button
                prev: '.slide-prev',                    //Previous button
                pagerAnchorBuilder: paginate,           //function used for navigation (do not change)
                speed: 2000,                            //Duration of transition in milliseconds
                pause: 1,                               //Pause on hover (true)
                easing: 'easeInOutQuint'                //Easing capability (do not change)
            });


        });

    });
}

// ----------------------------------------------------------------------------
// Fade/Slide Through lists
// ----------------------------------------------------------------------------
(function($) {

    $.fn.innerfade = function(options) {
        return this.each(function() {   
            $.innerfade(this, options);
        });
    };

    $.innerfade = function(container, options) {
        var settings = {
        	'animationtype':    'fade',
            'speed':            'normal',
            'type':             'sequence',
            'timeout':          2000,
            'containerheight':  'auto',
            'runningclass':     'innerfade',
            'children':         null
        };
        if (options)
            $.extend(settings, options);
        if (settings.children === null)
            var elements = $(container).children();
        else
            var elements = $(container).children(settings.children);
        if (elements.length > 1) {
            $(container).css('position', 'relative').css('height', settings.containerheight).addClass(settings.runningclass);
            for (var i = 0; i < elements.length; i++) {
                $(elements[i]).css('z-index', String(elements.length-i)).css('position', 'absolute').hide();
            };
            if (settings.type == "sequence") {
                setTimeout(function() {
                    $.innerfade.next(elements, settings, 1, 0);
                }, settings.timeout);
                $(elements[0]).show();
            } else if (settings.type == "random") {
            		var last = Math.floor ( Math.random () * ( elements.length ) );
                setTimeout(function() {
                    do { 
												current = Math.floor ( Math.random ( ) * ( elements.length ) );
										} while (last == current );             
										$.innerfade.next(elements, settings, current, last);
                }, settings.timeout);
                $(elements[last]).show();
						} else if ( settings.type == 'random_start' ) {
								settings.type = 'sequence';
								var current = Math.floor ( Math.random () * ( elements.length ) );
								setTimeout(function(){
									$.innerfade.next(elements, settings, (current + 1) %  elements.length, current);
								}, settings.timeout);
								$(elements[current]).show();
						}	else {
							alert('Innerfade-Type must either be \'sequence\', \'random\' or \'random_start\'');
						}
				}
    };

    $.innerfade.next = function(elements, settings, current, last) {
        if (settings.animationtype == 'slide') {
            $(elements[last]).slideUp(settings.speed);
            $(elements[current]).slideDown(settings.speed);
        } else if (settings.animationtype == 'fade') {
            $(elements[last]).fadeOut(settings.speed);
            $(elements[current]).fadeIn(settings.speed, function() {
							removeFilter($(this)[0]);
						});
        } else
            alert('Innerfade-animationtype must either be \'slide\' or \'fade\'');
        if (settings.type == "sequence") {
            if ((current + 1) < elements.length) {
                current = current + 1;
                last = current - 1;
            } else {
                current = 0;
                last = elements.length - 1;
            }
        } else if (settings.type == "random") {
            last = current;
            while (current == last)
                current = Math.floor(Math.random() * elements.length);
        } else
            alert('Innerfade-Type must either be \'sequence\', \'random\' or \'random_start\'');
        setTimeout((function() {
            $.innerfade.next(elements, settings, current, last);
        }), settings.timeout);
    };

})(jQuery);

// **** remove Opacity-Filter in ie ****
function removeFilter(element) {
	if(element.style.removeAttribute){
		element.style.removeAttribute('filter');
	}
}

// ----------------------------------------------------------------------------
// Twitter feed
// ----------------------------------------------------------------------------

(function(jQuery) {
    /*
        jquery.twitter.js v1.5
        Last updated: 08 July 2009

        Created by Damien du Toit
        http://coda.co.za/blog/2008/10/26/jquery-plugin-for-twitter

        Licensed under a Creative Commons Attribution-Non-Commercial 3.0 Unported License
        http://creativecommons.org/licenses/by-nc/3.0/
    */

    jQuery.fn.getTwitter = function(options) {

        jQuery.fn.getTwitter.defaults = {
                userName: null,
                numTweets: 5,
                loaderText: "Loading tweets...",
                slideIn: true,
                slideDuration: 750,
                showHeading: true,
                headingText: "Latest Tweets",
                showProfileLink: true,
                showTimestamp: true
        };

        var o = jQuery.extend({}, jQuery.fn.getTwitter.defaults, options);

        return this.each(function() {
            var c = jQuery(this);

            // hide container element, remove alternative content, and add class
            c.hide().empty().addClass("twitted");

            // add heading to container element
            if (o.showHeading) {
                    c.append("<h2>"+o.headingText+"</h2>");
            }

            // add twitter list to container element
            var twitterListHTML = "<ul id=\"twitter_update_list\"><li></li></ul>";
            c.append(twitterListHTML);

            var tl = jQuery("#twitter_update_list");

            // hide twitter list
            tl.hide();

            // add preLoader to container element
            var preLoaderHTML = jQuery("<p class=\"preLoader\">"+o.loaderText+"</p>");
            c.append(preLoaderHTML);

            // add Twitter profile link to container element
            if (o.showProfileLink) {
                    var profileLinkHTML = "<p class=\"profileLink\"><a href=\"http://twitter.com/"+o.userName+"\">http://twitter.com/"+o.userName+"</a></p>";
                    c.append(profileLinkHTML);
            }

            // show container element
            c.show();

            jQuery.getScript("http://twitter.com/javascripts/blogger.js");
            jQuery.getScript("http://twitter.com/statuses/user_timeline/"+o.userName+".json?callback=twitterCallback2&count="+o.numTweets, function() {
                // remove preLoader from container element
                jQuery(preLoaderHTML).remove();

                // remove timestamp and move to title of list item
                if (!o.showTimestamp) {
                    tl.find("li").each(function() {
                        var timestampHTML = jQuery(this).children("a");
                        var timestamp = timestampHTML.html();
                        timestampHTML.remove();
                        jQuery(this).attr("title", timestamp);
                    });
                }

                // show twitter list
                if (o.slideIn) {
                    // a fix for the jQuery slide effect
                    // Hat-tip: http://blog.pengoworks.com/index.cfm/2009/4/21/Fixing-jQuerys-slideDown-effect-ie-Jumpy-Animation
                    var tlHeight = tl.data("originalHeight");

                    // get the original height
                    if (!tlHeight) {
                            tlHeight = tl.show().height();
                            tl.data("originalHeight", tlHeight);
                            tl.hide().css({height: 0});
                    }

                    tl.show().animate({height: tlHeight}, o.slideDuration);
                }
                else {
                    tl.show();
                }

                // add unique class to first list item
                tl.find("li:first").addClass("firstTweet");

                // add unique class to last list item
                tl.find("li:last").addClass("lastTweet");
            });
        });
    };
})(jQuery);