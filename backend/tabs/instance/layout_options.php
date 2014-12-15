<?php
/**
 * Laytout options panel for rpp_instance.php
 * 
 * Usage: include(tabs/instance_layout_options.php);  
 */ 
?>
<div class="item">
    <?php
    $option_name = "title_text";
    $option_desc = "Plugin title";
    $o = new wpdreamsText($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $option_name = "show_under_content";
    $option_desc = __("Show the plugin under content?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
    <p class='descMsg'>It will show the plugin abelow the content automatically
        if enabled.</p>
</div>

<div class="item">
    <?php
    $option_name = "show_above_content";
    $option_desc = __("Show the plugin above content?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
    <p class='descMsg'>It will show the plugin above the content automatically
        if enabled.</p>
</div>

<div class="item">
    <?php
    $option_name = "show_on_posts";
    $option_desc = __("Show the plugin on posts?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>

</div>
<div class="item">
    <?php
    $option_name = "show_on_pages";
    $option_desc = __("Show the plugin on pages?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $option_name = "show_on_custom_post_types";
    $option_desc = __("Show plugin on custom post types", "related-posts-lite");
    $o = new wpdreamsCustomPostTypes($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>

<div class="item">
    <?php
    $option_name = "show_on_single";
    $option_desc = __("Show on single content pages?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>

<div class="item">
    <?php
    $option_name = "show_on_home";
    $option_desc = __("Show on the home page?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>

<div class="item">
    <?php
    $option_name = "show_on_archive";
    $option_desc = __("Show on archive pages?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>


<div class="item">
    <input type="hidden" name='rpl_submit' value=1 />
    <input name="submit_rpl" type="submit" value="<?php _e("Save all tabs!", "related-posts-lite"); ?>" />
</div>