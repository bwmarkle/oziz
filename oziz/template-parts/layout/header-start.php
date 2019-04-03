<?php 
    if (!is_page_template('templates/custom-homepage.php')) {
        $oziz_teaser_show = get_theme_mod( 'teaser_show' , 'yes' );
        if ($oziz_teaser_show === 'yes') {
            $oziz_teaser_title = get_theme_mod( 'teaser_title' , 'BLOG' );
            $oziz_teaser_title_sub = get_theme_mod( 'teaser_title_sub' , 'MY PERSONAL JOURNEY' );
            
            echo '<div id="oz-header-teaser">';        
            oziz_ch_block_teaser( $oziz_teaser_title , $oziz_teaser_title_sub );        
            echo '</div>';
        }
        $oziz_general_sidebar = get_theme_mod( 'general_sidebar' , 'right' );
        $oziz_general_column = 'oz-col-md-8';
        if ( $oziz_general_sidebar == 'full' ) {
            $oziz_general_column = 'oz-col-md-12';
        }
    ?>
        <div id="content" class="site-content">
            <div class="oz-container">
                <div class="oz-row">
                    <div class="<?php echo esc_attr($oziz_general_column); ?>">
<?php 
    }
    