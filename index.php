<?php
    require_once 'App/Core/Core.php';
    require_once 'App/Lib/Database/Connection.php';

    require_once 'App/Controller/UsuariosController.php';
    require_once 'App/Controller/ErroController.php';

    require_once 'App/Model/Usuarios.php';

    require_once 'vendor/autoload.php';

    $template = file_get_contents('App/Templates/estrutura.html');
    ob_start();
    $core = new Core();
    $core->start($_GET);

    $saida = ob_get_contents();
    ob_end_clean();

    $tltPronto = str_replace('{{area_dinamica}}',$saida, $template);
    echo $tltPronto;