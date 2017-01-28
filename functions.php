<?php 

if ( ! function_exists( 'dpx_yukle' ) ) {
	
	function dpx_yukle() {
        
        load_template( get_template_directory().'/fonksiyon/customizer/panel-ekle.php' );
        load_template( get_template_directory().'/fonksiyon/customizer/alan-ekle.php' );
        load_template( get_template_directory().'/fonksiyon/customizer/ayar-ekle.php' );
        load_template( get_template_directory().'/fonksiyon/customizer/geri-donusum.php' );
        load_template( get_template_directory().'/fonksiyon/customizer/kontroller.php' );
        load_template( get_template_directory().'/fonksiyon/customizer/cekirdek.php' );
        load_template( get_template_directory().'/fonksiyon/customizer/diger.php' );
        
	}
	
}
add_action( 'after_setup_theme', 'dpx_yukle' );

if ( ! function_exists( 'dpx_kurulum' )) {
	
	function dpx_kurulum() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );	
		register_nav_menus( array (
			'ustmenu'      => 'Üst Menü',
		) );
        	remove_filter( 'the_excerpt', 'wpautop' );        
		
	}
	
}

add_action( 'after_setup_theme', 'dpx_kurulum' );

if ( !function_exists( 'dpx_gerekli' )) {
    
    function dpx_gerekli() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css' );         
		wp_enqueue_style( 'fa', get_template_directory_uri(). '/font/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_script( 'genel', get_template_directory_uri().'/js/genel.js', array( 'jquery'),'', true);  
    }
    
}
add_action( 'wp_enqueue_scripts', 'dpx_gerekli' );

if(is_admin()) {
    wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/font/font-awesome/css/font-awesome.min.css' );   
} 

function html5_shim () {
	global $is_IE;
	if ($is_IE)
	echo '<!--[if lt IE 9]>';
    echo '<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>';
    echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
    echo '';
    echo '<![endif]-->';
}
add_action('wp_head', 'html5_shim');

if ( ! function_exists( 'dpx_yaziozet' ) ) {
	function dpx_yaziozet( $more ) {
		return '...';
	}
}
add_filter( 'excerpt_more', 'dpx_yaziozet' );

add_filter('comment_reply_link', 'replace_reply_link_class');
function replace_reply_link_class($class){
    $class = str_replace("class='comment-reply-link", "class='cevapla efekt3s", $class);
    return $class;
}

if ( ! function_exists( 'shape_comment' ) ) :
function dpx_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?> 
       
    
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'shape' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Düzenle)', '4Piksel' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    </li>
        
    
    <div id="comment-<?php comment_ID(); ?>" class="yorum">
        <div class="yorum-sol">
            <?php echo get_avatar( $comment, 96 ); ?>
        </div>
        <div class="yorum-sag">
            <div class="ust">
                <span class="ad"><?php printf( __( '%s', '4Piksel' ), sprintf( '%s', get_comment_author_link() ) ); ?></span>
                <span class="tarih"><?php comment_time('j F Y - H:i'); ?></span>
            </div>
            <div class="alt">
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <?php _e( '<p>(Yorumunuz yönetici onayı beklemektedir.)</p>', '4Piksel' ); ?>
                <?php endif; ?>
                <?php comment_text(); ?>
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </div>
    </div><!-- Yorum Bitiş -->     

    <?php
            break;
    endswitch; 
}

endif;

function adsoyad() {
    $ad = get_the_author_meta('first_name');
    $soyad = get_the_author_meta('last_name');
    $kisaad  = get_the_author_meta('user_nicename');
    $tamad = '';
    if( empty($ad)){
        $tamad = $soyad;
    } elseif( empty( $soyad )){
        $tamad = $ad;
    } else {
        $tamad = "{$ad} {$soyad}";
    }
    echo $tamad;
    if (empty($tamad)){
        echo $kisaad;
    }    
}

function sayfalama($pages = '', $range = 3)
    {
        $showitems = ($range * 2)+1;
            global $paged;
                if(empty($paged)) $paged = 1;
                if($pages == '') {
                        global $wp_query;
                        $pages = $wp_query->max_num_pages;
                        if(!$pages) {
                            $pages = 1;
                        } }
                if(1 != $pages) {
                    echo "<ul class='sayfalama'>";
                        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a class='buton' href='".get_pagenum_link(1)."'>&laquo;</a></li>";
                        for ($i=1; $i <= $pages; $i++) {
                    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                        echo ($paged == $i)? "<li class='aktif'><a class='buton' href='javascript:void(0)'>".$i."</a></li>":"<li><a class='buton' href='".get_pagenum_link($i)."' class='pasif' >".$i."</a></li>";
                    }}

                    if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a class='buton' href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
                    echo "</ul>";
                }
        }

add_filter( 'user_contactmethods', 'iletisim' );
function iletisim( $fields ) {
    $fields['facebook'] = __( 'Facebook' );
    $fields['twitter'] = __( 'Twitter' );
    $fields['gplus'] = __( 'Google Plus' );
    $fields['instagram'] = __( 'Instagram' );
    
    return $fields; 
}

function gereksiz_bilesen_kaldir() {
    unregister_widget('WP_Widget_Pages');     
    unregister_widget('WP_Widget_Calendar');     
    unregister_widget('WP_Widget_Archives');     
    unregister_widget('WP_Widget_Links');     
    unregister_widget('WP_Widget_Meta');       
    unregister_widget('WP_Widget_Categories');     
    unregister_widget('WP_Widget_Recent_Posts');     
    unregister_widget('WP_Widget_Recent_Comments');     
    unregister_widget('WP_Widget_RSS');     
    unregister_widget('WP_Widget_Tag_Cloud');     
    unregister_widget('WP_Nav_Menu_Widget');     
} 
add_action('widgets_init', 'gereksiz_bilesen_kaldir', 11);

add_filter( 'previous_image_link', 'resim_link' );
add_filter( 'next_image_link',     'resim_link' );
function resim_link( $link )
{
    $class = 'next_image_link' === current_filter() ? 'ileri efekt3s' : 'geri efekt3s';

    return str_replace( '<a ', "<a class='$class'", $link );
}

function katlink() {
    $kategoriler = get_the_category();
    if ( ! empty( $kategoriler ) ) {
        echo '<a href="' . esc_url( get_category_link( $kategoriler[0]->term_id ) ) . '">' . esc_html( $kategoriler[0]->name ) . '</a>';
    }       
} 

?>
