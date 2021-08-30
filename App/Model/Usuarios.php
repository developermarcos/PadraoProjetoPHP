<?php
    class Usuarios{
        public static function selecionaTodo(){
            
            $con = Connection::getConn();
            $sql = "SELECT * FROM usuarios ORDER BY UserName";
            $sql = $con->prepare($sql);
            $sql->execute();
            // echo'<pre>';
            // var_dump($sql->fetchAll());
            $resultado = array();
            while($row = $sql->fetchObject('Usuarios')){
                $resultado[] = $row;
            }
            if (!$resultado){
                throw new Exception("Não foi encontrado nenhum registro no banco");
            }else{
                return $resultado;
            }
        }
    }