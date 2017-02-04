<?php get_header(); ?>

    <!-- Sayfa -->
    <div id="sayfa" class="blog" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
        <div class="ortala">
        <div class="sayfasabit">
        <!-- Sayfa Sol -->
        <div class="sayfa-sol">
            
            <!-- Yazi -->
            <?php if(have_posts()): the_post(); get_template_part('content'); endif; ?>
            <!-- Yazi Bitisi -->
            
            <?php if(get_theme_mod('yazi-reklam')): ?>
            <div class="yazi-reklam">
                <?php echo get_theme_mod('yazi-reklam'); ?>
            </div>
            <?php endif; ?>
            
            <?php if(has_tag()): ?>
            <!-- Etiketler -->
            <div class="etiketler">
                <span><?php _e("Tags:","4Piksel"); ?></span>

                <?php the_tags( '', ' ', '' ); ?> 
            </div>
            <!-- Etiketler Bitis -->
            <?php endif; ?>            
            
            <!-- Onceki & Sonraki Yazi -->
            <div class="onsonyazi">
                <?php
                $onceki_yazi = get_previous_post();
                if (!empty( $onceki_yazi )): ?>                   
                     <a class="onceki" href="<?php echo $onceki_yazi->guid ?>"><?php echo $onceki_yazi->post_title ?></a>
                <?php endif; ?>  

                <?php
                $sonraki_yazi = get_next_post();
                if (!empty( $sonraki_yazi )): ?>
                    <a class="sonraki" href="<?php echo get_permalink( $sonraki_yazi->ID ); ?>"><?php echo $sonraki_yazi->post_title; ?></a>
                <?php endif; ?>                                              
            </div>
            <!-- Onceki & Sonraki Yazi Bitis -->
            
            <!-- Yorum Alan -->
            <?php comments_template(); ?>
            <!-- Yorum Alani Bitisi -->
            
        </div>
        <!-- Sayfa Sol Bitis -->
        
        <?php get_sidebar(); ?>
        </div>
         
        </div>
    </div>
    <!-- Sayfa Bitis -->

<?php get_footer(); ?>