    <!-- Alt Alan -->
    <footer id="alt" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
        <div class="ortala">
            <div class="kolonlar">
                
                <div class="kolon dort">
                    <?php if(get_theme_mod('telif_hakki')): ?>
                    <p class="telif"><?php if(get_theme_mod('telif_hakki_yazi')): echo get_theme_mod('telif_hakki_yazi'); else: ?>Theme created by <a target="_blank" href="https://www.4piksel.net">4Piksel Web Tasarim</a><?php endif; ?></p>
                    <?php endif; ?>
                    
                    <ul class="sosyal">
                        <?php if(get_theme_mod('facebook')): ?>
                        <li><a class="fb" href="<?php echo get_theme_mod('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if(get_theme_mod('twitter')): ?>
                        <li><a class="tw" href="<?php echo get_theme_mod('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        
                        <?php if(get_theme_mod('gplus')): ?>
                        <li><a class="gp" href="<?php echo get_theme_mod('gplus'); ?>"><i class="fa fa-google-plus"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('youtube')): ?>
                        <li><a class="yt" href="<?php echo get_theme_mod('youtube'); ?>"><i class="fa fa-youtube-play"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('linkedin')): ?>
                        <li><a class="li" href="<?php echo get_theme_mod('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('instagram')): ?>
                        <li><a class="in" href="<?php echo get_theme_mod('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('tumblr')): ?>
                        <li><a class="tm" href="<?php echo get_theme_mod('tumblr'); ?>"><i class="fa fa-tumblr"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Alt Alan Bitis -->

    <?php wp_footer(); ?>
    
<script>
    <?php if(get_theme_mod('analytics')): ?>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo get_theme_mod('analytics'); ?>', 'auto');
        ga('send', 'pageview');
    <?php endif; ?>

</script>    
</body>
</html>