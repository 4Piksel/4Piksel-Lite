<?php
    if ( post_password_required() )
        return;
?>
        
        <div class="yorumlar">  
        
            <div class="yorumlar-baslik"><?php comments_number( 'Yorum Yok', '1 Yorum', '% Yorum' ); ?></div>                
        
        <?php
			wp_list_comments( array( 'callback' => 'dpx_comment' ) );
		?>
        </div>        

        <div class="yorumform">
 
        <?php if ( have_comments() ) : ?>
 
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Eski Yorumlar', '4Piksel' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Yeni Yorumlar &rarr;', '4Piksel' ) ); ?></div>
        </nav>
        <?php endif;  ?>

 
    <?php endif;  ?>
 
    <?php
        if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="nocomments"><?php _e( 'Yorumlara Kapalı.', '4Piksel' ); ?></p>
    <?php endif; ?>
 
    <?php if ( comments_open() ) : ?>

<div id="respond">

    <h5 class="title"><?php cancel_comment_reply_link(); ?></h5>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

    <p><?php _e( 'Yorum yapabilmek için', '4Piksel' ); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e( 'giriş yapın.', '4Piksel' ); ?></a></p>

    <?php else : ?> 
         
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">      
    
    <div class="form">
    <textarea class="yazi-ic" name="comment" id="comment" cols="10" rows="5" placeholder="<?php _e( 'MESAJINIZ', '4Piksel' ); ?>" tabindex="4"></textarea>

    <?php comment_id_fields(); ?>    
   
    <?php if ( is_user_logged_in() ) : else : ?>
            <input type="text" name="author" id="author" value="" placeholder="<?php _e( 'AD SOYAD', '4Piksel' ); ?>" size="22" tabindex="1"/>

            <input class="sag" type="text" name="email" id="email" value="" placeholder="<?php _e( 'E-POSTA', '4Piksel' ); ?>" size="22" tabindex="2" />       

    <?php endif; ?>
    
    <button class="buton" name="submit" type="submit" id="submit" tabindex="5"><?php _e("GÖNDER","4piksel"); ?></button>
    </div>        
   
        
    <?php do_action('comment_form', $post->ID); ?>

    </form>
    <?php endif; ?>

</div>
            
                
<?php endif; ?> 

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav role="navigation" id="comment-nav-below" class="site-navigation comment-navigation">
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Eski Yorumlar', '4Piksel' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Yeni Yorumlar &rarr;', '4Piksel' ) ); ?></div>
        </nav>
        <?php endif; ?>	 
        
         </div> 