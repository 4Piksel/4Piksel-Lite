<article <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
    <?php if(has_post_thumbnail()) : ?>
    <div class="yazi-resim" itemprop="image">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large'); ?>
        </a>
    </div>
    <?php endif; ?>
    
    <div class="yazi-aciklama">
        <h2 itemprop="headline">
        <?php if(is_single()): ?>
            <?php the_title(); ?>
        <?php else: ?>    
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php endif; ?>    
        </h2>
        <div class="yazi-bilgiler">
            <span><time datetime="<?php the_time('d.m.Y'); ?>" itemprop="datePublished"><i class="fa fa-calendar"></i><?php the_time('d.m.Y'); ?></time></span>
            <span itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php adsoyad(); ?></a></span>
            <span><i class="fa fa-folder"></i><?php katlink(); ?></span>
            <span><i class="fa fa-comments"></i><?php comments_number( __('No Comments','4Piksel'), __('1 Comment','4Piksel'), __('% Comment','4Piksel') ); ?></span>                  
        </div>
        <div class="yazi-ozet" itemprop="text">
            <p><?php if(is_single()): the_content(); else: the_excerpt(); endif; ?></p>
        </div>
        <?php if(is_single()): else: ?>
        <a href="<?php the_permalink(); ?>" class="buton"><?php _e('Read More', '4Piksel'); ?></a>
        <?php endif; ?>
    </div>
</article>