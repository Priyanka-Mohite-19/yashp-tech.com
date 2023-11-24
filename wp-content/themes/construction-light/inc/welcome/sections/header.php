<div class="welcome-header clearfix">
    <div class="welcome-intro">
        <h2><?php
            printf(// WPCS: XSS OK.
                    /* translators: 1-theme name, 2-theme version */
                    esc_html__('Welcome to %1$s - Version %2$s', 'construction-light'), $this->theme_name, $this->theme_version);
            ?>
        </h2>
        <div class="welcome-text">
            <?php
            printf(// WPCS: XSS OK.
                    /* translators: 1-theme name */
                    esc_html__('Welcome and thank you for installing theme. %1$s is a clean, beautiful and fully customizable responsive modern free construction WordPress theme. And of course, the premium version for additional features and better supports.', 'construction-light'), $this->theme_name);
            ?>
        </div>

        <div class="free-pro-demos">
            <a class="button button-primary" href="<?php echo apply_filters('construction-light-demo-link','https://demo.sparklewpthemes.com/constructionlight/demos/'); ?>" target="_blank"><span class="dashicons dashicons-visibility"></span><?php esc_html_e('Free Demo', 'construction-light'); ?></a>
            <a class="button button-primary" href="<?php echo apply_filters('construction-light-pro-demo-link', 'https://demo.sparklewpthemes.com/constructionlightpro/'); ?>" target="_blank"><span class="dashicons dashicons-cart"></span><?php esc_html_e('Premium Demo', 'construction-light'); ?></a>
        </div>
    </div>

    <div class="welcome-promo-banner">
        <a class="welcome-promo-offer" href="<?php echo apply_filters('construction-light-pro-link', esc_url('https://sparklewpthemes.com/wordpress-themes/constructionlightpro/') );?>" target="_blank">
            <?php 
                printf(// WPCS: XSS OK.
                    /* translators: 1-theme name */
                    esc_html__('Unlock all the possibilities with %1$s Pro', 'construction-light'), $this->theme_name);
            ?>
        </a>
        <a href="<?php echo apply_filters('construction-light-pro-link', esc_url('https://sparklewpthemes.com/wordpress-themes/constructionlightpro/') );?>" target="_blank" class="button button-primary upgrade-btn"><?php echo esc_html__('UPGRADE TO PRO', 'construction-light'); ?></a>
    </div>
</div>

<div class="welcome-nav-wrapper clearfix">
    <?php foreach ($tabs as $section_id => $label) : ?>
        <?php
        $section = isset($_GET['section']) && array_key_exists($_GET['section'], $tabs) ? $_GET['section'] : 'getting_started';
        $nav_class = 'welcome-nav-tab';
        if ($section_id == $section) {
            $nav_class .= ' welcome-nav-tab-active';
        }
        ?>
        <a href="<?php echo esc_url(admin_url('admin.php?page=constructionlight-welcome&section=' . $section_id)); ?>" class="<?php echo esc_attr($nav_class); ?>" >
            <?php echo esc_html($label); ?>
        </a>
    <?php endforeach; ?>
</div>