<!-- template padrão -->

<?php get_header();?>
<!-- adiciona a imagem do header escolhida pelo usuário. A classe deixa a imagem responsiva (bootstrap) -->
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>">
    
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
                                <?php get_template_part('template-parts/content')
                                //primeiro (obrigatório): nome do arquivo (diretorio), sem a extensao
                                //segunda (opcional):
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