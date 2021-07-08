<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Curso Wordpress</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    
                    <div class="social-media-icons col-xl-9 col-sm-7 col-6">Icones Sociais</div>
                    <div class="search col-xl-3 col-sm-5 col-6 text-right">Pesquisa</div>
                
                </div>
            </div>
    
        </section>
        
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="logo col-md-2 col-12 text-center">Logo</div>
                    <nav class="menu col-md-10 text-right"><?php wp_nav_menu(array(
                        'theme_location' => 'my_main_menu'
                        ));?></nav> 
                    <!--
                    Função para exibir o menu dentro do tema. Ela recebe um array de configurações do menu.
                    1- Theme Location: slug do menu
                    Podem ser definidas muitas outras configurações
                    -->
                </div>
            </div>
            
        </section>
    
    </header>