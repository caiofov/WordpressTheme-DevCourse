<!-- template padrão -->

<?php get_header();?>
<!-- adiciona a imagem do header escolhida pelo usuário. A classe deixa a imagem responsiva (bootstrap) -->
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>">
    
    <div class="content-area">
        
        <main>

            <section class="middle-area">
                    <div class="container">
                        <div class="row">
                            <div class="news col-md-8">
                                <?php
                                    //se houver algum post publicado
                                    if(have_posts()):
                                        //Enquanto houver posts, mostre o post existente
                                        while(have_posts()): the_post();
                                ?>
                                
                                <?php get_template_part('template-parts/content',get_post_format())
                                //parâmetros -  - - -
                                //primeiro (obrigatório): nome do arquivo (diretorio), sem a extensao
                                //segundo (opcional): dá prioridade ao segundo parâmetro quando vai buscar o nome do arquivo
                                //getpostformat: retorna o formato do post que está rodando no loop. Nesse caso, dará prioridade e buscará um arquivo com o nome do tipo do
                                ?>
                                
                                <?php
                                    endwhile; //termina o display dos posts (o while)
                                    else: //caso não haja posts
                                ?>
                                <p>There's nothing yet to be displayed...</p> <!--Mostra caso não haja posts-->
                                <?php 
                                    endif; //termina o if
                                ?>
                            </div>
                            <?php get_sidebar('blog')?>
                        </div>
                    </div>
                
                
            </section>

        </main>
    
    </div>
<?php get_footer();?>