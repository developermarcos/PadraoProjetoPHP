<?php
    class Core{
        public function start($URL){
            
            if(isset($URL['metodo'])){
                $acao = $URL['metodo'];
            }else{
                $acao = 'index';
            }
            if(isset($URL['pagina'])){
                $controller = ucfirst($URL['pagina'].'Controller');
            }else{
                $controller = 'ErroController';
            }
            
            if(!class_exists($controller)){
                $controller = 'ErroController';
            }
            call_user_func_array(array(new $controller, $acao), array('ID' => $id));
            
        }
    }