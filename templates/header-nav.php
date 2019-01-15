<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <?php
            // Header Logo
            echo animalshelter_theme_logo();
            ?>
            <nav id="nav-menu-container">
                <?php
                //
                if( has_nav_menu( 'primary-menu' ) ) {
                    $args = array(
                        'theme_location' => 'primary-menu',
                        'container'      => '',
                        'depth'          => 2,
                        'menu_class'     => 'nav-menu',
                        'fallback_cb'    => 'animalshelter_bootstrap_navwalker::fallback',
                        'walker'         => new animalshelter_bootstrap_navwalker(),
                    );  
                    wp_nav_menu( $args );
                }
                ?>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
