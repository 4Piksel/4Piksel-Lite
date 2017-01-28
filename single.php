<?php get_header(); ?>

    <!-- Sayfa -->
    <div id="sayfa" class="blog" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
        <div class="ortala">
        <?php if(have_posts()): the_post(); ?>
        <div class="sayfa-ust">
            <h1 class="sayfa-baslik" itemprop="headline"><?php the_title(); ?></h1>
                <div class="yazi-bilgiler">
                    <span><time datetime="<?php the_time('d.m.Y'); ?>" itemprop="datePublished"><i class="fa fa-calendar"></i><?php the_time('d.m.Y'); ?></time></span>
                    <span itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php adsoyad(); ?></a></span>
                    <span><i class="fa fa-folder"></i><?php katlink(); ?></span>
                    <span><i class="fa fa-comments"></i><?php comments_number( 'Yorum Yok', '1 Yorum', '% Yorum' ); ?></span>
                </div>
        </div>  
        
        <div class="sayfasabit">
        <!-- Sayfa Sol -->
        <div class="sayfa-sol">
            
            <!-- Yazı Başlangıç -->
            <article class="post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
                <div class="yazi-resim" itemprop="image">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large');
                    } else {
                        echo '<img src="' . get_bloginfo( 'template_url' ) . '/rsm/resimyok.png" />';
                    } ?>
                </div>
                <div class="yazi-aciklama">
                    <div class="yazi-ozet" itemprop="text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <!-- Yazı Bitiş -->
            <?php endif; ?>
            
            <!-- Önceki & Sonraki Yazı -->
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
            <!-- Önceki & Sonraki Yazı Bitiş -->
            
            <!-- Yorum Alan -->
            <?php comments_template(); ?>
            <!-- Yorum Alanı Bitiş -->
            
        </div>
        <!-- Sayfa Sol Bitiş -->
        
        <?php get_sidebar(); ?>
        </div>
         
        </div>
    </div>
    <!-- Sayfa Bitiş -->

<?php get_footer(); ?>