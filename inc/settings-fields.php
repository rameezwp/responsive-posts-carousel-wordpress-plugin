<?php
	$fields = array(
        array(
            'key' => 'display_by',
            'type' => 'select',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Display By', 'responsive-posts-carousel' ),
            'help' => __( 'How you want to display carousel', 'responsive-posts-carousel' ),
            'options' => array(
            	'post_type' => __( 'By Post Type', 'responsive-posts-carousel' ),
            	'taxonomy' => __( 'By Taxonomy', 'responsive-posts-carousel' ),
            ),
        ),
        array(
            'key' => 'taxonomy',
            'type' => 'taxonomy',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Select Taxonomy', 'responsive-posts-carousel' ),
            'help' => __( 'Select Taxonomy', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('term', ''),
            'type' => 'term',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Select Term', 'responsive-posts-carousel' ),
            'help' => __( 'Select Terms', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'post_type',
            'type' => 'post_type',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Select Post Type', 'responsive-posts-carousel' ),
            'help' => __( 'Select Post Type', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('posts', ''),
            'type' => 'posts',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Select Posts', 'responsive-posts-carousel' ),
            'help' => __( 'Choose posts to display in carousel', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'exclude_ids',
            'type' => 'text',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Exclude Posts', 'responsive-posts-carousel' ),
            'help' => __( 'Comma separated ids of posts that you do not want to display', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'hover_effect',
            'type' => 'carousel_styles',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Post Style', 'responsive-posts-carousel' ),
            'help' => __( 'Choose post style to display in slider', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'title',
            'type' => 'text',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Title', 'responsive-posts-carousel' ),
            'help' => esc_html__( 'Provide post meta key to display as heading. You can use only one meta key here.', 'responsive-posts-carousel' ).' '.
            esc_html__( 'Example', 'responsive-posts-carousel' ).' '.
            '<code>post_title</code>, <code>post_date</code>, <code>content</code>, <code>post_author</code>, <code>excerpt</code>, <code>none</code>',
        ),
        array(
            'key' => 'titlewords',
            'type' => 'number',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Title Words Length', 'responsive-posts-carousel' ),
            'help' => __( 'Maximum words to display for title.', 'responsive-posts-carousel' ).' '.
            __( 'Example', 'responsive-posts-carousel' ).' <code>5</code>',
        ),
        array(
            'key' => 'desc',
            'type' => 'text',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Content', 'responsive-posts-carousel' ),
            'help' => esc_html__( 'Provide post meta key to display as description. You can use only one meta key here.', 'responsive-posts-carousel' ).' '.
            esc_html__( 'Example', 'responsive-posts-carousel' ).' '.
            '<code>post_title</code>, <code>post_date</code>, <code>content</code>, <code>post_author</code>, <code>excerpt</code>, <code>none</code>',
        ),
        array(
            'key' => 'words',
            'type' => 'number',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Content Words Length', 'responsive-posts-carousel' ),
            'help' => __( 'Maximum words to display for description.', 'responsive-posts-carousel' ).' '.
            __( 'Example', 'responsive-posts-carousel' ).' <code>30</code>',
        ),
        array(
            'key' => 'appendmore',
            'type' => 'text',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Append to Trimmed Text', 'responsive-posts-carousel' ),
            'help' => __( 'What to append if Maximum Words is defined. Default: ', 'responsive-posts-carousel' )
            .'<code>...</code>',
        ),
        array(
            'key' => 'enableshortcodes',
            'type' => 'checkbox',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Shortcodes/Page Builders', 'responsive-posts-carousel' ),
            'help' => __( 'Check this if you are using any page builder or shortcodes inside post/page contents.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'read_more_txt',
            'type' => 'text',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Read More Button Text', 'responsive-posts-carousel' ),
            'help' => __( 'Provide text for read more button, leave blank to disable', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'read_more_classes',
            'type' => 'text',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Read More Button CSS Classes', 'responsive-posts-carousel' ),
            'help' => __( 'Provide css classes for styling of button', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'read_more_target',
            'type' => 'select',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Link Target', 'responsive-posts-carousel' ),
            'help' => __( 'How you want to open links', 'responsive-posts-carousel' ),
            'options' => array(
            	'_self' => __( 'Same Tab', 'responsive-posts-carousel' ),
            	'_blank' => __( 'New Tab', 'responsive-posts-carousel' ),
            ),
        ),
        array(
            'key' => 'hidemeta',
            'type' => 'checkbox',
            'tab' => 'contents',
            'default' => '',
            'title' => __( 'Disable Post Meta (author, date etc)', 'responsive-posts-carousel' ),
            'help' => __( 'Check this button to hide post meta', 'responsive-posts-carousel' ),
        ),

        // Slider
        array(
            'key' => array('slider', 'accessibility'),
            'type' => 'checkbox',
            'tab' => 'slider',
            'default' => '',
            'title' => __( 'Accessibility', 'responsive-posts-carousel' ),
            'help' => __( 'Enables tabbing and arrow key navigation', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'autoplay'),
            'type' => 'checkbox',
            'tab' => 'slider',
            'default' => '',
            'title' => __( 'Auto Play', 'responsive-posts-carousel' ),
            'help' => __( 'Enables auto play of slides', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'autoplaySpeed'),
            'type' => 'number',
            'tab' => 'slider',
            'default' => '',
            'title' => __( 'Auto Play Speed', 'responsive-posts-carousel' ),
            'help' => __( 'Auto play change interval in milliseconds', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'cssease'),
            'type' => 'checkbox',
            'tab' => 'slider',
            'default' => '',
            'title' => __( 'Linear CSS Ease', 'responsive-posts-carousel' ),
            'help' => __( 'Enable it for smooth scrolling. (Auto Play Speed must be set to 0)', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'pauseonhover'),
            'type' => 'checkbox',
            'tab' => 'slider',
            'default' => '',
            'title' => esc_html__( 'Pause on Hover', 'responsive-posts-carousel' ),
            'help' => esc_html__( 'Enable it to pause the auto play when user hover over the slider.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'infinite'),
            'type' => 'checkbox',
            'tab' => 'slider',
            'default' => '',
            'title' => esc_html__( 'Infinite', 'responsive-posts-carousel' ),
            'help' => esc_html__( 'Infinite loop sliding.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'initialslide'),
            'type' => 'number',
            'tab' => 'slider',
            'default' => '0',
            'title' => esc_html__( 'Initial Slide', 'responsive-posts-carousel' ),
            'help' => esc_html__( 'Set the initial slide here, starting from 0', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'dots'),
            'type' => 'checkbox',
            'tab' => 'slider',
            'default' => '',
            'title' => __( 'Bottom Dots', 'responsive-posts-carousel' ),
            'help' => __( 'Check to enable current slide indicator dots', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'arrows'),
            'type' => 'checkbox',
            'tab' => 'arrows',
            'default' => '',
            'title' => __( 'Arrows', 'responsive-posts-carousel' ),
            'help' => __( 'Check to enable Next/Prev arrows', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'slidesToShow'),
            'type' => 'number',
            'tab' => 'slider',
            'default' => '3',
            'title' => __( 'Number of Columns (Desktop)', 'responsive-posts-carousel' ),
            'help' => __( 'Number of posts to show at a time in a row for desktop view', 'responsive-posts-carousel' ).' <code>992px+</code>',
        ),
        array(
            'key' => array('slider', 'slidesToShowtab'),
            'type' => 'number',
            'tab' => 'slider',
            'default' => '2',
            'title' => __( 'Number of Columns (Tablet)', 'responsive-posts-carousel' ),
            'help' => __( 'Number of posts to show at a time in a row for tablet view', 'responsive-posts-carousel' ).' <code>992px-</code>',
        ),
        array(
            'key' => array('slider', 'slidesToShowmob'),
            'type' => 'number',
            'tab' => 'slider',
            'default' => '1',
            'title' => __( 'Number of Columns (Mobile)', 'responsive-posts-carousel' ),
            'help' => __( 'Number of posts to show at a time in a row for mobile view', 'responsive-posts-carousel' ).' <code>768px-</code>',
        ),
        array(
            'key' => array('slider', 'slidesToScroll'),
            'type' => 'number',
            'tab' => 'slider',
            'default' => '1',
            'title' => __( 'Number of Posts To Slide', 'responsive-posts-carousel' ),
            'help' => __( 'Number of posts to slide at a time', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'speed'),
            'type' => 'number',
            'tab' => 'slider',
            'default' => '2000',
            'title' => __( 'Slide Speed', 'responsive-posts-carousel' ),
            'help' => __( 'Transition speed in milliseconds', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'margin'),
            'type' => 'text',
            'tab' => 'slider',
            'default' => '20x',
            'title' => __( 'Space Between Posts', 'responsive-posts-carousel' ),
            'help' => __( 'Margin will apply to both sides. Provide with unit.', 'responsive-posts-carousel' ).' '.
            __( 'Example', 'responsive-posts-carousel' ).' <code>20px</code>',
        ),

        // COlors
        array(
            'key' => 'border_width',
            'type' => 'text',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Border Width', 'responsive-posts-carousel' ),
            'help' => __( 'Provide width for border with unit. Leave blank to disable border.', 'responsive-posts-carousel' ).' '
            .__( 'Example', 'responsive-posts-carousel' ).' <code>2px</code>',
        ),
        array(
            'key' => 'border_color',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Border Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose color for border', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'border_type',
            'type' => 'select',
            'tab' => 'colors',
            'default' => '',
            'options' => array(
            	'solid' => __( 'Solid', 'responsive-posts-carousel' ),
            	'dotted' => __( 'Dotted', 'responsive-posts-carousel' ),
            	'dashed' => __( 'Dashed', 'responsive-posts-carousel' ),
            	'double' => __( 'Double', 'responsive-posts-carousel' ),
            	'groove' => __( 'Groove', 'responsive-posts-carousel' ),
            	'ridge' => __( 'Ridge', 'responsive-posts-carousel' ),
            	'inset' => __( 'Inset', 'responsive-posts-carousel' ),
            	'outset' => __( 'Outset', 'responsive-posts-carousel' ),
            ),
            'title' => __( 'Border Type', 'responsive-posts-carousel' ),
            'help' => __( 'Choose type for border', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'title_bg',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Title Background Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose Title Background Color.', 'responsive-posts-carousel' ).' '.
            __( 'Leave blank for default settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'title_color',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Title Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose Title text color.', 'responsive-posts-carousel' ).' '.
            __( 'Leave blank for default settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'desc_color',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Description Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose description text color.', 'responsive-posts-carousel' ).' '.
            __( 'Leave blank for default settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'desc_bg',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Description Background Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose description background color.', 'responsive-posts-carousel' ).' '.
            __( 'Leave blank for default settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'date_bg_color',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Date Background Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose date background color.', 'responsive-posts-carousel' ).' '.
            __( 'Leave blank for default settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'date_text_color',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Date Text Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose date text color.', 'responsive-posts-carousel' ).' '.
            __( 'Leave blank for default settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'overlay_bg_color',
            'type' => 'color',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Overlay Background Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose color for overlay.', 'responsive-posts-carousel' ).' '.
            __( 'Leave blank for default settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'shadow',
            'type' => 'text',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Shadow', 'responsive-posts-carousel' ),
            'help' => __( 'Provide shadow values as', 'responsive-posts-carousel' ).' <code>h-offset v-offset blur spread color</code> '.
            ' <a href="http://www.cssmatic.com/box-shadow" target="_blank">'.
            __( 'Generate Shadow', 'responsive-posts-carousel' ).
            '</a>',
        ),
        array(
            'key' => 'custom_css',
            'type' => 'textarea',
            'tab' => 'colors',
            'default' => '',
            'title' => __( 'Custom CSS', 'responsive-posts-carousel' ),
            'help' => __( 'Paste custom css code here', 'responsive-posts-carousel' ),
        ),

        // Typography
        array(
            'key' => array('typo', 'title_font_family'),
            'type' => 'text',
            'tab' => 'typography',
            'default' => '',
            'title' => __( 'Title Font Family', 'responsive-posts-carousel' ),
            'help' => __( 'Provide font name for title', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('typo', 'title_font_size'),
            'type' => 'text',
            'tab' => 'typography',
            'default' => '',
            'title' => __( 'Title Font Size', 'responsive-posts-carousel' ),
            'help' => __( 'Provide font size for title with unit', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('typo', 'desc_font_family'),
            'type' => 'text',
            'tab' => 'typography',
            'default' => '',
            'title' => __( 'Description Font Family', 'responsive-posts-carousel' ),
            'help' => __( 'Provide font name for description', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('typo', 'desc_font_size'),
            'type' => 'text',
            'tab' => 'typography',
            'default' => '',
            'title' => __( 'Description Font Size', 'responsive-posts-carousel' ),
            'help' => __( 'Provide font size for description with unit', 'responsive-posts-carousel' ),
        ),

        // Arrows
        array(
            'key' => array('arrow', 'type'),
            'type' => 'select',
            'tab' => 'arrows',
            'default' => '',
            'title' => __( 'Arrows Type', 'responsive-posts-carousel' ),
            'help' => __( 'Choose navigation arrows type here', 'responsive-posts-carousel' ),
            'options' => array(
                'circle' => __( 'Circle', 'responsive-posts-carousel' ),
                'circleinverted' => __( 'Circle Inverted', 'responsive-posts-carousel' ),
                'simple' => __( 'Simple', 'responsive-posts-carousel' ),
                'long' => __( 'Long', 'responsive-posts-carousel' ),
                'angle' => __( 'Angle', 'responsive-posts-carousel' ),
                'doubleangle' => __( 'Double Angle', 'responsive-posts-carousel' ),
                'caret' => __( 'Caret', 'responsive-posts-carousel' ),
                'caretsquare' => __( 'Caret Square', 'responsive-posts-carousel' ),
                'hand' => __( 'Hand', 'responsive-posts-carousel' ),
                'chevron' => __( 'Chevron', 'responsive-posts-carousel' ),
            ),
        ),
        array(
            'key' => array('arrow', 'style'),
            'type' => 'select',
            'tab' => 'arrows',
            'default' => '',
            'title' => __( 'Arrows Style', 'responsive-posts-carousel' ),
            'help' => __( 'Choose arrow appearance here', 'responsive-posts-carousel' ),
            'options' => array(
                'transparent' => __( 'Transparent', 'responsive-posts-carousel' ),
                'square' => __( 'Square', 'responsive-posts-carousel' ),
                'circle' => __( 'Circle', 'responsive-posts-carousel' ),
            ),
        ),
        array(
            'key' => 'arrow_color',
            'type' => 'color',
            'tab' => 'arrows',
            'default' => '',
            'title' => __( 'Arrows Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose arrow color', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('arrow', 'bgcolor'),
            'type' => 'color',
            'tab' => 'arrows',
            'default' => '',
            'title' => __( 'Arrows Background Color', 'responsive-posts-carousel' ),
            'help' => __( 'Choose arrow background color', 'responsive-posts-carousel' ),
        ),

        // Advanced Settings
        array(
            'key' => 'images_size',
            'type' => 'image_size',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Images Size', 'responsive-posts-carousel' ),
            'help' => __( 'Choose images size for thumbnails', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'rows'),
            'type' => 'number',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Rows', 'responsive-posts-carousel' ),
            'help' => __( 'Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'offset',
            'type' => 'number',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Skip Posts', 'responsive-posts-carousel' ),
            'help' => __( 'Number of posts to skip from initial posts regarding current settings.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'posts_per_page',
            'type' => 'number',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Total Posts', 'responsive-posts-carousel' ),
            'help' => __( 'Number of posts to display from current settings. Leave blank to display all.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => array('slider', 'slidesPerRow'),
            'type' => 'number',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Slides Per Row', 'responsive-posts-carousel' ),
            'help' => __( 'With grid mode initialized via the rows option, this sets how many slides are in each grid row.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'placeholder_image',
            'type' => 'text',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Placeholder Image Url', 'responsive-posts-carousel' ),
            'help' => __( 'Provide placeholder image url for that posts which do not have featured images.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'disable_current_post',
            'type' => 'checkbox',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Disable Current Post', 'responsive-posts-carousel' ),
            'help' => __( 'Check to exclude the current post from slider if you are using it under a post.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'equal_height_mode',
            'type' => 'checkbox',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Equal Height Mode', 'responsive-posts-carousel' ),
            'help' => __( 'Checking this make all images same in height.', 'responsive-posts-carousel' ),
        ),
        array(
            'key' => 'images_height',
            'type' => 'text',
            'tab' => 'advanced',
            'default' => '',
            'title' => __( 'Images Height', 'responsive-posts-carousel' ),
            'help' => __( 'Fixed Height for images in px if Equal Height Mode is enabled. Eg: 450px', 'responsive-posts-carousel' ),
        ),
    );
?>