<?php 

include "config.class.php";

class Viagem {

    private  $pdo;
    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=controle_frota;host=localhost","root","F@bio102030popo");            
    }   
   

    public function adicionar($data_saida,$data_chegada,$hora_saida,
    $hora_chegada,$km_chegada,$km_saida,$destino,$motorista){

        $sql = $this->pdo->prepare("INSERT INTO viagem SET data_saida =: data_saida, data_chega=: data_chegada, hora_chegada=: hora_chegada,
        hora_saida=:hora_saida, km_chegada=: km_chegada, km_saida=:km_saida,destino=: destino,motorista=:motorista");

        $sql->bindParam(":data_saida",$data_saida);
        $sql->bindParam(":data_chegada",$data_chegada);
        $sql->bindParam(":hora_saida",$hora_saida);
        $sql->bindParam(":hora_chegada",$hora_chegada);
        $sql->bindParam(":km_chegada",$km_chegada);
        $sql->bindParam(":km_saida",$km_saida);
        $sql->bindParam(":destino",$destino);
        $sql->bindParam(":motorista",$motorista);
      

        echo "sucesso";
    
    }

}


?>


