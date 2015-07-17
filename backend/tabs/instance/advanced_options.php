<?php
/**
 * Advanced options panel for rpp_instance.php
 * 
 * Usage: include(tabs/instance_advanced_options.php);  
 */ 
?>


<fieldset>
    <legend><?php _e('Autoplay Options', 'related-posts-lite'); ?></legend>
    <div class="item">
        <?php
        $option_name = "autoplay";
        $option_desc = __("Enable autoplay?", "related-posts-lite");
        $o = new wpdreamsYesNo($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "autoplay_show_indicator";
        $option_desc = __("Show the autoplay indicator?", "related-posts-lite");;
        $o = new wpdreamsYesNo($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "autoplay_time";
        $option_desc = __("Autoplay interval (ms)", "related-posts-lite");
        $o = new wpdreamsTextSmall($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
        <p class='descMsg'>The default is 6000 milliseconds.</p>
    </div>
</fieldset>


<div class="item">
  <p class='infoMsg'>
  <?php _e("By excluding one or more categories, the content (posts/custom post types) form those terms won't show on the frontend.", "related-posts-lite"); ?>
  </p>
  <?php
    $option_name = "exclude_categories";
    $option_desc = __("Exclude categories", "related-posts-lite");
    $o = new wpdreamsCategories($option_name, $option_desc, 
             wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    $params['selected-'.$o->getName()] = $o->getSelected();
  ?>
</div>


<div class="item">
  <?php
    $option_name = "exclude_by_id";
    $option_desc = __("Exclude posts by ID", "related-posts-lite");
    $o = new wpdreamsTextarea($option_name, $option_desc, 
             wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
  ?>
  <p class='descMsg'><?php _e("Separated by comma, example: 1, 2, 13, 24, 100", "related-posts-lite"); ?></p>
</div>

<div class="item">
    <input type="hidden" name='rpl_submit' value=1 />
    <input name="submit_rpl" type="submit" value="<?php _e("Save all tabs!", "related-posts-lite"); ?>" />
</div>