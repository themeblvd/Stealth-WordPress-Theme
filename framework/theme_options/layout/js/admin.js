//ThemeBlvd Framework JS
jQuery.noConflict()(function(){

    jQuery(document).ready(function(){

        //Contact Form Builder
        jQuery(document).ready(function(){
            jQuery(".contact-form-builder tr:even").css("background-color", "#f2f2f2");
        });

        //Help box open
        jQuery("a.jaybich-open").click(function(){
            jQuery(jQuery(this).attr('href')).fadeIn('normal');
            return false;
	});

        //Help box close
        jQuery('a.jaybich-close').click(function() {
            jQuery(jQuery(this).attr('href')).fadeOut();
            return false;
        });

        //Clear uploaded file field
        jQuery('a.themeblvd-file-remove').click(function() {
            jQuery(jQuery(this).attr('href')).fadeOut();
            var field = jQuery(this).parent().parent().find('input.upload');
            jQuery(field).val('');
            return false;
        });

        //Theme Options tabs UI
        jQuery(".themeblvd-tab").hide();
        jQuery(".themeblvd-menu ul li:first").addClass("active").show();
        jQuery(".themeblvd-tab:first").show();

        jQuery(".themeblvd-menu ul li").click(function() {
            jQuery(".themeblvd-menu ul li").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(".themeblvd-tab").hide();
            var activeTab = jQuery(this).find("a").attr("href");
            jQuery(activeTab).fadeIn(); 
            return false;
        });

    });

});

//Update message
(function($){
    $.fn.themeblvdUpdate = function() {

        var $this = $(this);

        $this.fadeIn();
        window.setTimeout(function(){
            $this.fadeOut();
        }, 2000);

        return this;
    }
})(jQuery);


//Upload Option
(function ($) {
  uploadOption = {
    init: function () {
      
      // On Click
      $('.upload_button').live("click", function () {
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=1');
        return false;
      });
    }
  };
  $(document).ready(function () {
    uploadOption.init()
  })
})(jQuery);