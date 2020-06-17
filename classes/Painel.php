<?php

    class Painel{

        public static $cargos = ['0' => 'Normal','1' => 'Sub Administrador','2' => 'Administrador'];

        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        public static function insertLead($lead){
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_site.leads` VALUES (null,?)");
            $sql->execute(array($lead));
        }

        public static function carregarPagina(){
        	if(isset($_GET['url'])){
        		$url = explode('/',$_GET['url']);
        		if(file_exists('pages/'.$url[0].'.php')){
        			include('pages/'.$url[0].'.php');
        		}else{
        			// Página não existe
        			header('Location: '.INCLUDE_PATH_PAINEL);
        		}
        	}else{
        		include('pages/home.php');
        	}
        }

        public static function alert($tipo,$mensagem){
            if($tipo == 'sucesso'){
                echo '<div class="box-alert sucesso"><i class="fa fa-check"></i>'.$mensagem.'</div>';
            }else if($tipo == 'erro'){
                echo '<div class="box-alert erro"><i class="fa fa-times"></i>'.$mensagem.'</div>';
            }
        }

        public static function delete($tabela,$id=false){
            if($id == false)
                $sql = MySql::conectar()->prepare("DELETE FROM `$tabela`");
            else
                $sql = MySql::conectar()->prepare("DELETE FROM `$tabela` WHERE id = $id");

            $sql->execute();
        }

        public static function selectAll($tabela,$start = null,$end = null){
            if($start == null && $end == null)
                $sql = MySql::conectar()->prepare("SELECT * FROM `$tabela`");
            else
                $sql = MySql::conectar()->prepare("SELECT * FROM `$tabela` LIMIT $start,$end");
    
            $sql->execute();
            
            return $sql->fetchAll();
        }

        public static function redirect($url){
            echo '<script>location.href="'.$url.'"</script>';
            die();
        }

        /*
            Método específico para selecionar apenas 1 registro
        */
        public static function select($table,$query = '',$arr = ''){
            if($query != false){
                $sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query");
                $sql->execute($arr);
            }else{
                $sql = MySql::conectar()->prepare("SELECT * FROM `$table`");
                $sql->execute();
            }
            return $sql->fetch();
        }


    }

?>
