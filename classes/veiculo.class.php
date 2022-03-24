<?php 

//var_dump($_POST);

class Veiculo {


  private $pdo;

  public function __construct( ) {
  
      //conexão banco de dados
  
      $this -> pdo = new PDO("mysql:dbname=controle_frota;host=localhost","root","F@bio102030"
      );
  

}

public function pesquisar ( ) {


     
     
     $sql= "select * FROM
     veiculo AS v
     JOIN tipo_veiculo AS tipo  on tipo_veiculo_idtipo_veiculo = idtipo_veiculo
      where placa_veiculo like  '".$_POST['pesquisar_placa']."' ";

    // $sql="
    // select * FROM
    // veiculo AS v
    // JOIN tipo_veiculo AS tipo  on tipo_veiculo_idtipo_veiculo = idtipo_veiculo
    //  where placa_veiculo like '%HPL5260%' ";


  $sql = $this->pdo->query($sql);

if ($sql->rowCount() > 0) {

    //retorna todos os clientes
    return $sql ->fetchAll();

}else {
    return array();
}

echo "chegamos aqui";

}		

}

class Saveiro {

    private $pdo;

    public function __construct( ) {
    
        //conexão banco de dados
    
        $this -> pdo = new PDO("mysql:dbname=controle_frota;host=localhost","root","F@bio102030"
        );
    
  }


  public function getplacas() {

    return $this->pdo->query("
        select * FROM
        veiculo AS v
        JOIN tipo_veiculo AS tipo  on tipo_veiculo_idtipo_veiculo = idtipo_veiculo
        WHERE tipo_veiculo = 'saveiro' ")
        ->fetchAll();	
    
  }







}