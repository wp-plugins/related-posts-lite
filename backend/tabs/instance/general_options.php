<?php
/**
 * General options panel for rpp_instance.php
 * 
 * Usage: include(tabs/instance_general_options.php);  
 */ 
?>
<?php
    $themes = array(
        array('option'=>'Pinteresting', 'value'=>'pinteresting'),
        array('option'=>'Pinteresting transparent', 'value'=>'pinteresting-transparent'),
        array('option'=>'Polaroid', 'value'=>'polaroid'),
        array('option'=>'Polaroid transparent', 'value'=>'polaroid-transparent'),
        array('option'=>'Curvy', 'value'=>'curvy'),
        array('option'=>'Curvy transparent', 'value'=>'Curvy-transparent')
    );
?>
<div class="item">
    <?php
    $o = new wpdreamsCustomSelect("theme", __("Theme", "related-posts-lite"), array(
        'selects'=>$themes,
        'value'=>wpdreams_setval_or_getoption($_so, 'theme', $_dk)
    ));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
  <?php
  $option_name = "items_count";
  $option_desc = __("Max items count", "related-posts-lite");
  $o = new wpdreamsTextSmall($option_name, $option_desc,
           wpdreams_setval_or_getoption($_so, $option_name, $_dk));
  $params[$o->getName()] = $o->getData();
  ?>
</div>
<div class="item">
  <?php
    $option_name = "on_lesscontent";
    $option_desc = __("On less content fill the items with", "related-posts-lite");
    $o = new wpdreamsCustomSelect($option_name, $option_desc, array(
        'selects'=>wpdreams_setval_or_getoption($_so, $option_name.'_def', $_dk),
        'value'=>wpdreams_setval_or_getoption($_so, $option_name, $_dk)
    ));
    $params[$o->getName()] = $o->getData();
  ?>
</div>
<div class="item">
  <?php
    $o = new wpdreamsCustomSelect("on_nocontent", __("On no results fill the items with", "related-posts-lite"), array(
        'selects'=>wpdreams_setval_or_getoption($_so, 'on_nocontent_def', $_dk),
        'value'=>wpdreams_setval_or_getoption($_so, 'on_nocontent', $_dk)
    ));
    $params[$o->getName()] = $o->getData();
  ?>
</div> 
<div class="item">
  <?php
    $o = new wpdreamsYesNo("hide_on_no_results", __("Hide if no content is found whatsoever?", "related-posts-lite"),
         wpdreams_setval_or_getoption($_so, 'hide_on_no_results', $_dk));
    $params[$o->getName()] = $o->getData();
  ?>
</div>

<div class="item">
    <?php
    $option_name = "show_images";
    $option_desc = __("Show images in results?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $option_name = "image_width";
    $option_desc = __("Image width", "related-posts-lite");
    $o = new wpdreamsTextSmall($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $option_name = "image_height";
    $option_desc = __("Image height", "related-posts-lite");
    $o = new wpdreamsTextSmall($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<fieldset>
    <legend><?php _e('Image source settings', 'related-posts-lite'); ?></legend>
    <div class="item">
        <?php
        $option_name = "image_source1";
        $option_desc = __("Primary image source", "related-posts-lite");
        $o = new wpdreamsCustomSelect($option_name, $option_desc, array(
            'selects'=>wpdreams_setval_or_getoption($_so, 'image_sources', $_dk),
            'value'=>wpdreams_setval_or_getoption($_so, $option_name, $_dk)
        ));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "image_source2";
        $option_desc = __("Alternative image source 1", "related-posts-lite");
        $o = new wpdreamsCustomSelect($option_name, $option_desc, array(
            'selects'=>wpdreams_setval_or_getoption($_so, 'image_sources', $_dk),
            'value'=>wpdreams_setval_or_getoption($_so, $option_name, $_dk)
        ));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "image_source3";
        $option_desc = __("Alternative image source 2", "related-posts-lite");
        $o = new wpdreamsCustomSelect($option_name, $option_desc, array(
            'selects'=>wpdreams_setval_or_getoption($_so, 'image_sources', $_dk),
            'value'=>wpdreams_setval_or_getoption($_so, $option_name, $_dk)
        ));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "image_source4";
        $option_desc = __("Alternative image source 3", "related-posts-lite");
        $o = new wpdreamsCustomSelect($option_name, $option_desc, array(
            'selects'=>wpdreams_setval_or_getoption($_so, 'image_sources', $_dk),
            'value'=>wpdreams_setval_or_getoption($_so, $option_name, $_dk)
        ));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "image_source5";
        $option_desc = __("Alternative image source 4", "related-posts-lite");
        $o = new wpdreamsCustomSelect($option_name, $option_desc, array(
            'selects'=>wpdreams_setval_or_getoption($_so, 'image_sources', $_dk),
            'value'=>wpdreams_setval_or_getoption($_so, $option_name, $_dk)
        ));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "image_default";
        $option_desc = __("Default image url", "related-posts-lite");
        $o = new wpdreamsUpload($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "image_custom_field";
        $option_desc = __("Custom field containing the image", "related-posts-lite");
        $o = new wpdreamsText($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
</fieldset>

<div class="item">
  <input type="hidden" name='rpl_submit' value=1 />
  <input name="submit_rpl" type="submit" value="<?php _e("Save all tabs!", "related-posts-lite"); ?>" />
</div>