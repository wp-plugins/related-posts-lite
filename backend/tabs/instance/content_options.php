<div class="item">
    <?php
    $option_name = "return_posts";
    $option_desc = __("Return posts?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $option_name = "return_pages";
    $option_desc = __("Return pages?", "related-posts-lite");
    $o = new wpdreamsYesNo($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $option_name = "return_customposttypes";
    $option_desc = __("Return custom post types?", "related-posts-lite");
    $o = new wpdreamsCustomPostTypes($option_name, $option_desc,
        wpdreams_setval_or_getoption($_so, $option_name, $_dk));
    $params[$o->getName()] = $o->getData();
    ?>
</div>


<fieldset>
    <legend><?php _e('Advanced options', 'related-posts-lite'); ?></legend>
    <div class="item">
        <?php
        $option_name = "show_content";
        $option_desc = __("Show content", "related-posts-lite");
        $o = new wpdreamsCustomSelect($option_name, $option_desc,
            array('selects' => wpdreams_setval_or_getoption($_so, $option_name . '_def', $_dk),
                'value' => wpdreams_setval_or_getoption($_so, $option_name, $_dk))
        );
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "content_max_length";
        $option_desc = __("Content max length (characters)", "related-posts-lite");
        $o = new wpdreamsTextSmall($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "show_date";
        $option_desc = __("Show the date?", "related-posts-lite");
        $o = new wpdreamsYesNo($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
    <div class="item">
        <?php
        $option_name = "date_format";
        $option_desc = __("Date format", "related-posts-lite");
        $o = new wpdreamsText($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
        <p class='descMsg'>Default <b>Y-m-d H:i:s</b></p>
    </div>
    <div class="item">
        <?php
        $option_name = "show_author";
        $option_desc = __("Show the author?", "related-posts-lite");
        $o = new wpdreamsYesNo($option_name, $option_desc,
            wpdreams_setval_or_getoption($_so, $option_name, $_dk));
        $params[$o->getName()] = $o->getData();
        ?>
    </div>
</fieldset>

<div class="item">
    <input type="hidden" name='rpl_submit' value=1 />
    <input name="submit_rpl" type="submit" value="<?php _e("Save all tabs!", "related-posts-lite"); ?>" />
</div>