<?php if( is_active_sidebar('sidebar-1')): //verifica se existe algum widget ativo dentro da sidebar passada no parâmetro?>
    <aside class="sidebar col-md-4 h-100">
        <?php dynamic_sidebar('sidebar-1')//carrega o conteúdo da sidebar?>
    </aside>
    
<?php endif?>