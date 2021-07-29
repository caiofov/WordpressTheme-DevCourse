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
                                <p>Conteúdo vindo do page-home.php</p>
            
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