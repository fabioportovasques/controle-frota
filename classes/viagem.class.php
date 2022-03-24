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

class Viagem {

   
        private $pdo;

        public function __construct( ) {
        
            //conexão banco de dados
        
            $this -> pdo = new PDO("mysql:dbname=controle_frota;host=localhost","root","F@bio102030"
            );
        
            
      
    }


     public function adicionar($data_saida,$data_chegada,$hora_chegada,$hora_saida,$km_chegada,$km_saida,$destino,$motorista){

         $sql = $this->pdo->prepare("INSERT INTO viagem SET km_saida=:km_saida,km_chegada=:km_chegada,hora_chegada=:hora_chegada,
         hora_saida=:hora_saida,data_chegada=:data_chegada,data_saida=:data_saida,destino=:destino,motorista=:motorista");

        // $sql = $this->pdo->prepare("INSERT INTO viagem SET  motorista=:motorista");


        $sql->bindParam(":data_saida",$data_saida);
        $sql->bindParam(":data_chegada",$data_chegada);
        $sql->bindParam(":hora_chegada",$hora_chegada);
        $sql->bindParam(":hora_saida",$hora_saida);       
        $sql->bindParam(":km_chegada",$km_chegada);
        $sql->bindParam(":km_saida",$km_saida);
        $sql->bindParam(":destino",$destino);
        $sql->bindParam(":motorista",$motorista);     
        $sql->execute();

        echo "Cadastrado com sucesso!!!";
    

     }

}

?>


