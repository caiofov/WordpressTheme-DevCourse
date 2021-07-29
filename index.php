<!-- template padrão -->

<?php get_header();?>
    
    <div class="content-area">
        
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section>

            <section class="services">
                <div class="container">
                    <div class="row">
                        Serviços
                    </div>
                </div>
            </section>

            <section class="middle-area">
                    <div class="container">
                        <div class="row">
                            <aside class="sidebar col-md-4">
                                Barra Lateral
                            </aside>
                            <div class="news col-md-8">
                                <?php
                                    //se houver algum post publicado
                                    if(have_posts()):
                                        //Enquanto houver posts, mostre o post existente
                                        while(have_posts()): the_post();
                                ?>
                                <article>
                                    <h2><?php the_title();?></h2>
                                    <?php the_post_thumbnail(array(275,275)); //o parâmetro é o tamanho da imagem?>
                                    <p>Published in <?php echo get_the_date(); //geralmente precisamos inserir "echo" antes das funções get, pois estas apenas recuperam um valor e não msotram nada na tela?> by <?php the_author_posts_link(); ?></p>
                                    <p>Categories: <?php the_category(' ') //o parâmetro é para separar as categorias por um espaço?></p>
                                    <p><?php the_tags('Tags: ', ', '); //Atributos: 
                                    //1- Texto que será mostrado antes da lista de tags
                                    //2- separação das tags?></p>
                                    <?php the_content(); //mostra o conteúdo do post
                                    ?>
                                </article>
                                <?php
                                    endwhile; //termina o display dos posts (o while)
                                    else: //caso não haja posts
                                ?>
                                <p>There's nothing yet to be displayed...</p> <!--Mostra caso não haja posts-->
                                <?php 
                                    endif; //termina o if
                                ?>
                            </div>
                        </div>
                    </div>
                
                
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">
                        Mapa
                    </div>
                </div>
            </section>
        </main>
    
    </div>
<?php get_footer();?>