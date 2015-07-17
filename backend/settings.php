<?php
$params = array();
$messages = "";

$_dk = 'rpl_defaults';  // default options array key
$_so = get_option('rpl_options');

rppCache::clearCache(1337420);

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=470596109688127&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#tabs a[tabid="1"]').trigger('click');
    });
</script>

<div id="wpdreams" class='wpdreams wrap'>

    <?php if(RPL_DEBUG == 1): ?>
        <p class='infoMsg'>Debug mode is on!</p>
    <?php endif; ?>

    <div class="wpdreams-box" style='vertical-align: middle;'>
    <a class='gopro' href='http://demo.wp-dreams.com/?product=related_posts_pro' target='_blank'>Get the pro version!</a>
    or leave a like :)
    <div style='display: inline-block;' class="fb-like" data-href="https://www.facebook.com/pages/WPDreams/383702515034741" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
    or you can follow me
    <a href="https://twitter.com/ernest_marcinko" class="twitter-follow-button" data-show-count="false">Follow @ernest_marcinko</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>

    <div class="wpdreams-box" style='vertical-align: middle;'>
        <fieldset>
            <legend><?php _e("Shortcodes for custom placement", "related-posts-lite"); ?></legend>
            <label class="shortcode"><?php _e("Simple shortcode:", "related-posts-lite"); ?></label>
            <input type="text" class="shortcode" value="[wpdreams_rpl]" readonly="readonly">
            <label class="shortcode"><?php _e("Shortcode for templates:", "related-posts-lite"); ?></label>
            <input type="text" class="shortcode" value="&lt;?php echo do_shortcode('[wpdreams_rpl]'); \?&gt;" readonly="readonly">
        </fieldset>
    </div>
    
    <?php ob_start(); ?>

    <div class="wpdreams-box">

        {--messages--}

        <form action='' method='POST' name='rpl_data'>
            <ul id="tabs"  class='tabs'>
                <li><a tabid="1" class='current general'><?php _e('General Options', 'related-posts-lite'); ?></a></li>
                <li><a tabid="3" class='layout'><?php _e('Layout Options', 'related-posts-lite'); ?></a></li>
                <li><a tabid="4" class='frontend'><?php _e('Relevance Options', 'related-posts-lite'); ?></a></li>
                <li><a tabid="5" class='theme'><?php _e('Content Options', 'related-posts-lite'); ?></a></li>
                <li><a tabid="6" class='advanced'><?php _e('Advanced', 'related-posts-lite'); ?></a></li>
            </ul>
            <div id="content" class='tabscontent'>
                <div tabid="1">
                    <fieldset>
                        <legend><?php _e('Genearal Options', 'related-posts-lite'); ?></legend>

                        <?php include(RPL_PATH."backend/tabs/instance/general_options.php"); ?>

                    </fieldset>
                </div>
                <div tabid="3">
                    <fieldset>
                        <legend><?php _e('Layout Options', 'related-posts-lite'); ?></legend>

                        <?php include(RPL_PATH."backend/tabs/instance/layout_options.php"); ?>

                    </fieldset>
                </div>
                <div tabid="4">
                    <fieldset>
                        <legend><?php _e('Relevance Options', 'related-posts-lite'); ?></legend>

                        <?php include(RPL_PATH."backend/tabs/instance/relevance_options.php"); ?>

                    </fieldset>
                </div>
                <div tabid="5">
                    <fieldset>
                        <legend><?php _e('Content Options', 'related-posts-lite'); ?></legend>

                        <?php include(RPL_PATH."backend/tabs/instance/content_options.php"); ?>

                    </fieldset>
                </div>
                <div tabid="6">
                    <fieldset>
                        <legend><?php _e('Advanced Options', 'related-posts-lite'); ?></legend>

                        <?php include(RPL_PATH."backend/tabs/instance/advanced_options.php"); ?>

                    </fieldset>
                </div>
            </div>
        </form>
    </div>

    <?php $output = ob_get_clean(); ?>

    <?php
    if (isset($_POST['rpl_submit'])) {
        /* update data */
        $params = wpdreams_parse_params($_POST);

        $_rpl_options = get_option('rpl_options');
        $_rpl_options = array_merge($_rpl_options, $params);

        update_option('rpl_options', $_rpl_options);

        rppCache::clearCache(1337420);

        $messages .= "<div class='infoMsg'>" . __('Related posts lite settings saved!', 'related-posts-lite') . "</div>";
    }

    echo str_replace("{--messages--}", $messages, $output);
    ?>
</div>