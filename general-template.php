<?php
/*Template Name: General Template */
?>

<?php get_header();?>
<!-- adiciona a imagem do header escolhida pelo usuário. A classe deixa a imagem responsiva (bootstrap) -->
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>">
<div class="content-area">
    
    <main>

        <section class="middle-area">
                <div class="container">
                        <div class="general-template">
                            <?php
                                //se houver algum post publicado
                                if(have_posts()):
                                    //Enquanto houver posts, mostre o post existente
                                    while(have_posts()): the_post();
                            ?>
                            <article>
                                <h2><?php the_title();?></h2>
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
        
    </main>

</div>
<?php get_footer();?>