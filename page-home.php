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
                    <h1> Our Services</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service-item">
                                <?php
                                if(is_active_sidebar('services-1')){
                                    dynamic_sidebar('services-1');}
                                
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                            <?php
                                if(is_active_sidebar('services-2')){
                                    dynamic_sidebar('services-2');
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                            <?php
                                if(is_active_sidebar('services-3'))
                                    {dynamic_sidebar('services-3');}
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="middle-area">
                    <div class="container">
                        <div class="row">
                            <?php get_sidebar('home')?>
                            <div class="news col-md-8">
                                <div class="container">
                                    <h1>Latest News</h1>
                                    <div class="row">
                                        
                                        <?php
                                        $featured = new WP_Query('post_type=post&posts_per_page=1&cat=3,6');
                                        //argumentos:
                                        //tipo de post: pode ser "post" ou page"
                                        //n??mero de posts a serem exibidos
                                        //category_name: categoria do post a ser exibido (poderia ser so "cat", que seria o slug/id -> da pra ver passando o mouse por cima)

                                        //a vari??vel criada acima ?? uma inst??ncia da classe WP_Query. Dessa forma, iremos acessar seus m??todos para exibir os posts.
                                        if($featured->have_posts()):
                                            while($featured->have_posts()):$featured->the_post();
                                        ?>
                                        <div class="col-12">
                                            <?php get_template_part('template-parts/content','featured');?>
                                        </div>
                                        
                                        <?php
                                            endwhile;
                                            wp_reset_postdata(); //reseta a busca padr??o de posts, para n??o incluenciar posteriormente
                                        endif;
                                        ?>

                                        <?php //segundo loop
                                        //dessa vez, iremos passar os argumentos por array para facilitar a visualiza????o
                                        $args= array(
                                            'post_type'=>'post',
                                            'posts_per_page'=>2,
                                            'category__not_in'=>array(5), //especifica que categorias N??O devem entrar no loop
                                            'category__in'=>array(3,6),
                                            'offset'=> 1 //diz quantos elementos deve ignorar no come??o da busca. Isso evita repeti????o de not??cias.
                                        );
                                        $secondary = new WP_Query($args);
                                       
                                        if($secondary->have_posts()):
                                            while($secondary->have_posts()):$secondary->the_post();
                                        ?>
                                        <div class="col-sm-6">
                                            <?php get_template_part('template-parts/content','secondary');?>
                                        </div>
                                        
                                        <?php
                                            endwhile;
                                            wp_reset_postdata(); 
                                        endif;
                                        ?>
                                    
                                    </div>
                                </div>
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