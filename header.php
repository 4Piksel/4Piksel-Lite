<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
	<?php wp_head(); ?>
	
    <style>
        <?php if(get_theme_mod('baslik_renk')): ?>

        <?php endif; ?>
    </style>	
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
       
    <!-- Ust Alan -->
    <header id="ust" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
        <div class="ortala">
            
            <div class="logo <?php if( get_theme_mod( 'site_logo' )): echo 'bpx'; endif; ?>">
                <?php if( get_theme_mod( 'site_logo' )): ?>
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" alt="<?php bloginfo('name'); ?>"></a>
                <?php else: ?>
                <h1 itemprop="headline"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
            </div>
            
            <div class="aciklama">
                <?php if(is_single()): the_title(); else: bloginfo('description'); endif; ?>
            </div>                   
                        
            <?php if(has_nav_menu('ustmenu') ): ?>
            <div class="menuac"><span></span></div>
            
            <?php wp_nav_menu( array(
                'theme_location'  => 'ustmenu',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'depth'           => 0,
            ) ); endif; ?>

        </div>
    </header>
    
    <?php if(has_nav_menu('ortamenu')): ?>
    <nav id="menu">
        <div class="ortala">
            <?php wp_nav_menu( array(
                'theme_location'  => 'ortamenu',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'depth'           => 0,
            ) ); ?>
        </div>
    </nav>
    <?php endif; ?>
    <!-- Ust Alan Bitis -->