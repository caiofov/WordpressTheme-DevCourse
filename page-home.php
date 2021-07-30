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
                            <?php get_sidebar('home')?>
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