<?php get_header(); ?>

    <!-- Sayfa -->
    <div id="sayfa" class="blog" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
        <div class="ortala">
        
        <div class="sayfa-ust">
            <h1 class="sayfa-baslik"><?php bloginfo('name'); ?></h1>
            <p class="sayfa-aciklama"><?php bloginfo('description'); ?></p>     
        </div>  
        
        <div class="sayfasabit">
        <!-- Sayfa Sol -->
        <div class="sayfa-sol">
        
            <?php while ( have_posts() ) : the_post(); ?>
            <!-- Yazi -->
            <article <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
                <div class="yazi-resim" itemprop="image">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('large');
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/rsm/resimyok-byk.png" />';
                        } ?>
                    </a>
                </div>
                <div class="yazi-aciklama">
                    <h1 itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="yazi-bilgiler">
                        <span><time datetime="<?php the_time('d.m.Y'); ?>" itemprop="datePublished"><i class="fa fa-calendar"></i><?php the_time('d.m.Y'); ?></time></span>
                        <span itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php adsoyad(); ?></a></span>
                        <span><i class="fa fa-folder"></i><?php katlink(); ?></span>
                        <span><i class="fa fa-comments"></i><?php comments_number( __('No Comments','4Piksel'), __('1 Comment','4Piksel'), __('% Comment','4Piksel') ); ?></span>                  
                    </div>
                    <div class="yazi-ozet" itemprop="text">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="buton"><?php _e('Read More', '4Piksel'); ?></a>
                </div>
            </article>
            <!-- Yazi Bitisi -->
            <?php endwhile; ?>
            
            <!-- Sayfalama -->
            <?php
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', '4Piksel' ),
                    'next_text'          => __( 'Next page', '4Piksel' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', '4Piksel' ) . ' </span>',
                ) );
            ?>            
            <!-- Sayfalama Bitis -->
            
        </div>
        <!-- Sayfa Sol Bitisi -->
        
        <?php get_sidebar(); ?>
        </div>
         
        </div>
    </div>
    <!-- Sayfa Bitisi -->

<?php get_footer(); ?>