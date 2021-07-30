<article>
    <h2><?php the_title();?></h2>
    <?php the_post_thumbnail(array(275,275)); //o parâmetro é o tamanho da imagem?>
    
    <p>by <?php the_author_posts_link(); ?></p>
    <p>Categories: <?php the_category(' ') //o parâmetro é para separar as categorias por um espaço?></p>
    
    <p><?php the_tags('Tags: ', ', '); //Atributos: 
    //1- Texto que será mostrado antes da lista de tags
    //2- separação das tags?></p>
    
    <?php the_content(); //mostra o conteúdo do post
    ?>
</article>