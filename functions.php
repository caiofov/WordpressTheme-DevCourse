<?php /* Não precisa fechar a tag do php nesse arquivo */

function load_scripts(){/* carrega as folhas de estilo utilizando uma função do wordpress que enfileira os arquivos */
    /*Adicionando o bootstrap */
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.jss', array('jquery'), '4.0.0', true);
    /*1- identificador 2-caminho 3-dependencia (jquery já vem no wordpress) 4-versao 5-indica se quer inserir no footer ou na head (padrão é false). Colocaremos antes o fechamento do body*/
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0','all');
    
    
    /*Adicionando a folha de estilo */
    wp_enqueue_style( 'template', get_template_directory_uri().'/css/template.css', array(), '1.0','all');
    
    /*Parâmetros da função pronta: 
    
    1- IDENTIFICADOR ('id' do html): Pode ser qualquer nome, de preferência o nome do arquivo, desde que não repita, pois precisam ser únicos
    2- CAMINHO: diretório até o arquivo. Utilizaremos uma função do wordpress (get_template_directory()) que imprime o diretório até o arquivo atual. Dessa forma, concatentaremos apenas o diretório relativo até o arquivo da folha de estilo
    3- DEPENDÊNCIA: informa se o arquivo a ser carregado depende de outros arquivos, isto é, se outros arquivos precisam ser carregados antes dele. Deve ser passado como um array o nome de cada um. Nesse caso, passaremos um array vazio, pois não precisamos de nenhum.
    4- VERSÃO
    5- TIPO DE MÍDIA: qual tipo de arquivo o script se refere. Pode ser 'print', 'screen' ou 'all'. Esse último é o mais utilizado.
    */

    

}

/* Mas nenhuma função é executada "do nada" no wordpress. Precisamos relacioná-la a uma ação, ou seja, um "gancho" (hook), que será executada quando o wordpress for. Com outras palavras, é uma maneira de ligar nossas funções ao wordpress e, assim, executá-las*/
add_action('wp_enqueue_scripts', 'load_scripts');
/*1- Gancho | 2- função a ser executada */




function wpcurso_config(){ //Função de configuração do tema
    //Registrando menus
    register_nav_menus(
        array(
            'my_main_menu' =>'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );
    /*Recebe um array onde são encontrados todos os menus a serem registrados (podem ser registrados mais de um por vez) 
1- Slug do menu: nome curto de identificação. É chamado de chave no array.
Depois da => é o nome que o menu terá dentro da área de administração do wordpress.
*/
    
//essa função permite diversas alterações no tema pelo usuário
    $args = array( //argumentos a serem personalizados
        'height' => 225,
        'width' => 1920
        //essas dimensões são as recomendadas pelo wordpress
    );
    add_theme_support('custom-header', $args);
    //adicionando header personalizado

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wpcurso_config',0);