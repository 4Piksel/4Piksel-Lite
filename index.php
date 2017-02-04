<?php get_header(); ?>

    <!-- Sayfa -->
    <div id="sayfa" class="blog" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
        <div class="ortala">
        
        <div class="sayfasabit">
        <!-- Sayfa Sol -->
        <div class="sayfa-sol">
        
            <!-- Yazi -->
            <?php while ( have_posts() ) : the_post(); get_template_part('content'); endwhile; ?>            
            <!-- Yazi Bitisi -->
            
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