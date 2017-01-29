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
        load_template( get_template_directory().'/fonksiyon/tema-etiket.php' );
        
	}
	
}
add_action( 'after_setup_theme', 'dpx_yukle' );

if ( ! function_exists( 'dpx_kurulum' )) {
	
	function dpx_kurulum() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
        add_theme_support( "custom-header", $args );
        add_theme_support( "custom-background", $args );
        add_editor_style();
		register_nav_menus( array (
			'ustmenu'      => __('Header Menu', '4Piksel'),
		) );
        remove_filter( 'the_excerpt', 'wpautop' ); 
        if ( ! isset( $content_width ) ) $content_width = 1000;
	}
	
}

add_action( 'after_setup_theme', 'dpx_kurulum' );

function dpx_bilesen() {
    
    register_sidebar( array(
        'name' => __( 'Sidebar', '4Piksel' ),
        'id' => 'sidebar',
        'description' => __( 'The components you add to the sidebar area appear only in the right hand area.', '4Piksel' ),
        'before_widget' => '<aside class="widget">', 
        'after_widget' => '</aside>',
        'before_title' => '<span class="widget-baslik">',
        'after_title' => '</span><div class="alt">',)
    );
    
}
add_action( 'widgets_init', 'dpx_bilesen' );

function dpx_arama( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="search" action="' . home_url( '/' ) . '" >
			<input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="'. esc_attr__( 'Search...', '4Piksel' ) .'" />
            <button type="submit"><i class="fa fa-search"></i></button>
	</form>';

return $form;
}

add_filter( 'get_search_form', 'dpx_arama' );

function dpx_bilesen_kaldir() {  
    unregister_widget('WP_Widget_Calendar');       
} 
add_action('widgets_init', 'dpx_bilesen_kaldir', 11);

if ( !function_exists( 'dpx_gerekli' )) {
    
    function dpx_gerekli() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css' );         
		wp_enqueue_style( 'fa', get_template_directory_uri(). '/font/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_script( 'jsdosya', 'http://code.jquery.com/jquery-1.10.1.min.js', array( 'jquery'),'', true);  
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

add_filter('comment_reply_link', 'cevap_link_sinif');
function cevap_link_sinif($class){
    $class = str_replace("class='comment-reply-link", "class='cevapla", $class);
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
        <p><?php _e( 'Pingback:', '4Piksel' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', '4Piksel' ), ' ' ); ?></p>
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
                    <?php _e( '<p>(Your comment is waiting for administrator approval.)</p>', '4Piksel' ); ?>
                <?php endif; ?>
                <?php comment_text(); ?>
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </div>
    </div><!-- Yorum Bitis -->     

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

add_filter( 'user_contactmethods', 'iletisim' );
function iletisim( $fields ) {
    $fields['facebook'] = __( 'Facebook', '4Piksel' );
    $fields['twitter'] = __( 'Twitter', '4Piksel' );
    $fields['gplus'] = __( 'Google Plus', '4Piksel' );
    $fields['instagram'] = __( 'Instagram', '4Piksel' );
    
    return $fields; 
}

function katlink() {
    $kategoriler = get_the_category();
    if ( ! empty( $kategoriler ) ) {
        echo '<a href="' . esc_url( get_category_link( $kategoriler[0]->term_id ) ) . '">' . esc_html( $kategoriler[0]->name ) . '</a>';
    }       
}

function AramaFiltresi($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','AramaFiltresi');

add_theme_support('infinite-transporter', 
    array( 
        'container' => 'sayfa-sol', 
        'posts_per_page'  => 5 
    ) 
);

add_action( 'after_setup_theme', 'tema_dil' );
function tema_dil(){
    load_theme_textdomain( '4Piksel', get_template_directory() . '/dil' );
}

define('WPLANG', 'tr-TR');

function cevap_js() {

    if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
        wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
    }
}
add_action(  'wp_enqueue_scripts', 'cevap_js' );



function reklami_ekle( $content ) {
	
	$ad_code = '<div class="yazireklam">' .get_theme_mod('yazi-ic-reklam'). '</div>';

	if ( is_single() && ! is_admin() ) {
		return reklam_paragraf( $ad_code, get_theme_mod('reklam_paragraf'), $content );
	}
	
	return $content;
}
add_filter( 'the_content', 'reklami_ekle' );
 
function reklam_paragraf( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	foreach ($paragraphs as $index => $paragraph) {

		if ( trim( $paragraph ) ) {
			$paragraphs[$index] .= $closing_p;
		}

		if ( $paragraph_id == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}
	
	return implode( '', $paragraphs );
}

?>