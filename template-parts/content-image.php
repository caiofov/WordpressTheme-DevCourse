<article>
    <h2><?php the_title();?></h2>
    <?php the_post_thumbnail(array(275,275)); //o parâmetro é o tamanho da imagem?>
    
    <div class="meta-info">
        <p>Published in <?php echo get_the_date(); //geralmente precisamos inserir "echo" antes das funções get, pois estas apenas recuperam um valor e não msotram nada na tela?> by <?php the_author_posts_link(); ?></p>
        <p>Categories: <?php the_category(' ') //o parâmetro é para separar as categorias por um espaço?></p>
        <p><?php the_tags('Tags: ', ', '); //Atributos: 
        //1- Texto que será mostrado antes da lista de tags
        //2- separação das tags?></p>
    </div>
    
    <?php the_content(); //mostra o conteúdo do post
    ?>
</article>