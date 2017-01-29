<?php

if ( post_password_required() ) {
	return;
}
?>

<div class="yorumlar">

	<?php if ( have_comments() ) : ?>
		<div class="yorumlar-baslik">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '4Piksel' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</div>

		<?php dpx_yorum_nav(); ?>

			<?php
				wp_list_comments( 'type=comment&callback=dpx_comment' );
			?>

		<?php dpx_yorum_nav(); ?>

	<?php endif; ?>

	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', '4Piksel' ); ?></p>
	<?php endif; ?>

</div>


<?php
    
    $args = array(
        'id_form'           => 'commentform',
        'class_form'      => 'yorumform',
        'id_submit'         => 'submit',
        'class_submit'      => 'buton',
        'name_submit'       => 'submit',
        'title_reply'       => __( 'Leave a Reply', '4Piksel' ),
        'title_reply_to'    => __( 'Leave a Reply to %s', '4Piksel' ),
        'cancel_reply_link' => __( 'Cancel Reply', '4Piksel' ),
        'label_submit'      => __( 'Post Comment', '4Piksel' ),
        'format'            => 'xhtml',

        'comment_field' =>  '<textarea class="yazi-ic" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="'.sprintf(__('Message', '4Piksel')).'">' .
        '</textarea>',

        'must_log_in' => '<p class="bilgi">' .
        sprintf(
          __( 'You must be <a href="%s">logged in</a> to post a comment.', '4Piksel' ),
          wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
        ) . '</p>',

        'logged_in_as' => '<p class="bilgi">' .
        sprintf(
        __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', '4Piksel' ),
          admin_url( 'profile.php' ),
          $user_identity,
          wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
        ) . '</p>',      

        'comment_notes_before' => '',
        
        'comment_notes_after' => '',          

        'fields' => apply_filters(
            'comment_form_default_fields', array(
                'author' =>'<input id="author" placeholder="'.sprintf(__('Full Name (Required)', '4Piksel')).'" name="author" type="text" value="' .
                    esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'
                    ,
                'email'  => '<input id="email" placeholder="'.sprintf(__("E-Mail (Required)", "4Piksel")).'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' />'  .
                    ( $req ? '' : '' ) 
                     ,
                'url'    => '<input id="url" name="url" placeholder="'.sprintf(__("Website", "4Piksel")).'" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />'
            )
        ),          
        
    );
        comment_form( $args );    
    
    ?>