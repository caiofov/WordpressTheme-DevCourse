<?php get_header();?>
<div id="primary">
    <div id="main">
        <div class="container"> <!--não é necessário checar se existem posts, pois este arquivo só é chamado quando foi clicado em um post -->
            
            <?php
            while(have_posts()):the_post();
                get_template_part('template-parts/content','single');
            endwhile;
            ?>
        
        </div>
    </div>
</div>

<?php get_footer();?>