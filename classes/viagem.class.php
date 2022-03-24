<?php 

//require 'config.class.php';


$data_saida = $_POST['data_saida'];
$data_chegada = $_POST['data_chegada'];
$hora_saida= $_POST['hora_saida'];
$hora_chegada = $_POST['hora_chegada'];
$km_chegada = $_POST['km_chegada'];
$km_saida = $_POST['km_saida'];
$destino = $_POST['destino'];
$motorista= $_POST['motorista'];
$tipo_veiculo_idtipo_veiculo= $_POST['tipo_veiculo_idtipo_veiculo'];
$veiculo_id_veiculo = $_POST['veiculo_id_veiculo'];



class Viagem {

   
        private $pdo;

        public function __construct( ) {
        
            //conexão banco de dados
        
            $this -> pdo = new PDO("mysql:dbname=controle_frota;host=localhost","root","F@bio102030",
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
        
            
      
    }


     public function adicionar($data_saida,$data_chegada,$hora_chegada,$hora_saida,$km_chegada,$km_saida,$destino,$motorista,
     $tipo_veiculo_idtipo_veiculo,$veiculo_id_veiculo){

         $sql = $this->pdo->prepare("INSERT INTO viagem SET km_saida=:km_saida,km_chegada=:km_chegada,hora_chegada=:hora_chegada,
         hora_saida=:hora_saida,data_chegada=:data_chegada,data_saida=:data_saida,destino=:destino,motorista=:motorista,
         tipo_veiculo_idtipo_veiculo=:tipo_veiculo_idtipo_veiculo,veiculo_id_veiculo=:veiculo_id_veiculo");

        // $sql = $this->pdo->prepare("INSERT INTO viagem SET  motorista=:motorista");


        $sql->bindParam(":data_saida",$data_saida);
        $sql->bindParam(":data_chegada",$data_chegada);
        $sql->bindParam(":hora_chegada",$hora_chegada);
        $sql->bindParam(":hora_saida",$hora_saida);       
        $sql->bindParam(":km_chegada",$km_chegada);
        $sql->bindParam(":km_saida",$km_saida);
        $sql->bindParam(":destino",$destino);
        $sql->bindParam(":motorista",$motorista);  
        $sql->bindParam(":tipo_veiculo_idtipo_veiculo",$tipo_veiculo_idtipo_veiculo);   
        $sql->bindParam(":veiculo_id_veiculo",$veiculo_id_veiculo);   
        $sql->execute();

        print '<div class="alert alert-success" role="alert">
            Cadastrado com sucesso
      </div>';
  print '<script>window.setTimeout(function(){window.location=\'../index.php\';}, 2000);</script>';


     }

}

?>


