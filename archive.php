<?php get_header(); ?>

    <!-- Sayfa -->
    <div id="sayfa" class="blog" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
        <div class="ortala">
        
        <div class="sayfa-ust">
            <?php if(is_archive()):
                    the_archive_title( '<h1 class="sayfa-baslik">', '</h1>' );
                elseif(is_category()):
                    single_cat_title( '<h1 class="sayfa-baslik">', '</h1>' );
                endif;
            ?>               
        </div>  
        
        <div class="sayfasabit">
        <!-- Sayfa Sol -->
        <div class="sayfa-sol">
        
            <?php while ( have_posts() ) : the_post(); ?>
            <!-- Yazı Başlangıç -->
            <article class="post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
                <div class="yazi-resim" itemprop="image">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('large');
                        } else {
                            echo '<img src="' . get_bloginfo( 'template_url' ) . '/rsm/resimyok-byk.png" />';
                        } ?>
                    </a>
                </div>
                <div class="yazi-aciklama">
                    <h1 itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="yazi-bilgiler">
                        <span><time datetime="<?php the_time('d.m.Y'); ?>" itemprop="datePublished"><i class="fa fa-calendar"></i><?php the_time('d.m.Y'); ?></time></span>
                        <span itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php adsoyad(); ?></a></span>
                        <span><i class="fa fa-folder"></i><?php katlink(); ?></span>
                        <span><i class="fa fa-comments"></i><?php comments_number( 'Yorum Yok', '1 Yorum', '% Yorum' ); ?></span>
                    </div>
                    <div class="yazi-ozet" itemprop="text">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="buton">Devamını Oku</a>
                </div>
            </article>
            <!-- Yazı Bitiş -->
            <?php endwhile; ?>
            
            <!-- Sayfalama -->
            <?php sayfalama(); ?>
            <!-- Sayfalama Bitiş -->
            
        </div>
        <!-- Sayfa Sol Bitiş -->
        
        <?php get_sidebar(); ?>
        </div>
         
        </div>
    </div>
    <!-- Sayfa Bitiş -->

<?php get_footer(); ?>