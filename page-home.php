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