<?php /* Não precisa fechar a tag do php nesse arquivo */

function load_scripts(){/* carrega as folhas de estilo utilizando uma função do wordpress que enfileira os arquivos */
    wp_enqueue_style( 'template', get_template_directory_uri().'/css/template.css', array(), '1.0','all');
    
    /*Parâmetros da função pronta: 
    
    1- identificador: Pode ser qualquer nome, de preferência o nome do arquivo, desde que não repita, pois precisam ser únicos
    
    2- caminho: diretório até o arquivo. Utilizaremos uma função do wordpress (get_template_directory()) que imprime o diretório até o arquivo atual. Dessa forma, concatentaremos apenas o diretório relativo até o arquivo da folha de estilo
    
    3- Dependência: informa se o arquivo a ser carregado depende de outros arquivos, isto é, se outros arquivos precisam ser carregados antes dele. Deve ser passado como um array o nome de cada um. Nesse caso, passaremos um array vazio, pois não precisamos de nenhum.

    4- Versão

    5- Tipo de mídia: qual tipo de arquivo o script se refere. Pode ser 'print', 'screen' ou 'all'. Esse último é o mais utilizado.
    */


}

/* Mas nenhuma função é executada "do nada" no wordpress. Precisamos relacioná-la a uma ação, ou seja, um "gancho" (hook), que será executada quando o wordpress for. Com outras palavras, é uma maneira de ligar nossas funções ao wordpress e, assim, executá-las*/
add_action('wp_enqueue_scripts', 'load_scripts');
/*1- Gancho / 2- função a ser executada */