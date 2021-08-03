<article <?php post_class(array('class'=> 'featured')); //adiciona "featured" ao nome da class?>>

    <div class="thumbmnail">
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('large',array('class'=> 'img-fluid')) //"img-fluid" é a classe do bootstrap que deixa a imagem responsiva;?>
        </a>
    </div>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    
    
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link(); ?></span>
            Categories: <span><?php the_category( ' ' ); ?></span>
            <?php the_tags( 'Tags: <span>', ', ', '</span>' ) //essa função aceita 3 argumentos, podendo ser tags html o primeiro e o último; ?>
        </p>
        <p><span><?php echo get_the_date(); ?></span></p>
    </div>
    <?php the_excerpt(); //resumo do post?>
    
    
</article>