<?php
class UsuariosController{
    public function index(){
        // echo"usuários";
        try{
            $usuarios = Usuarios::selecionaTodo();
            
            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('usuarios.html');

            $parametros = array();
            $parametros['Pagina'] = 'Usuários';
            $parametros['Usuarios'] = $usuarios;

            $conteudo = $template->render($parametros);
            echo$conteudo;
            
        }catch(Exception $Ex){
            echo $Ex->getMessage();
        }
    }
    public function CreateUser(){
        
    }
    public function AlterUser(){
        die('aqui2');
    }
}