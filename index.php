<?php

/*
Plugin Name: Up Arrow
Plugin URI: http://github.com/mbmccormick/wordpress-up-arrow
Description: Floating "back to top" arrow on every page.
Author: Matt McCormick
Version: 1.0
Author URI: http://mbmccormick.com
*/

function append_footer()
{
?>
<div id="up-arrow" style="display: none; background: #DBDBDB; border-bottom-left-radius: 5px 5px; border-bottom-right-radius: 5px 5px; border-top-left-radius: 5px 5px; border-top-right-radius: 5px 5px; color: #333; cursor: pointer; font-size: 36px; opacity: 0.7; padding: 18px 18px; position: fixed; right: 52px; top: 42px;">
    &#9650;
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
    $(window).scroll(function() {
        if($(this).scrollTop() >= 350) {
            $("#up-arrow").fadeIn();	
        }
        else {
            $("#up-arrow").fadeOut();
        }
    });
    
    $("#up-arrow").click(function() {
        $("body,html").animate({ scrollTop:0 }, 800);
    });
</script>
<?php
}

add_action("wp_footer", "append_footer");

?>