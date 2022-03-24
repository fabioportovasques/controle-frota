<?php 

    require 'classes/veiculo.class.php';

    $veiculo = new Veiculo();

    $lista = $veiculo->Pesquisar();
    foreach ($lista as $item):

?>
<?php endforeach; ?>




<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Motos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">

    <script type="text/javascript" src="ajax.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/bootstrap.min.js" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='assets/css/style2.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script> 


<style type="text/css">

    .pesquisa{
        font-size: 18px;
        color: #005188;
        font-family: 'Noto Serif', serif;
        margin: 1px solid;
        font-weight: bold;
    }

</style>

</head>
<body>
    <div class="container">
        <div id="logo">
        <picture>
            <source media="(min-width: 300px)" srcset="assets/img/logo.png">
                 <img src="assets/img/logo.png" width="100px">
            </picture>
            
        </div>

        <div class="texto1">        
                Controle de Frotas Defend
        </div>

        <div class="img1">
            <picture>
                <img src="assets/img/saveiro.png" width="150px" >
            </picture>
        </div>

        <div class="texto2">
              <p>
                  SAVEIRO: <?php echo $item['placa_veiculo']; ?>
              </p>
      </div>

      <div class="texto3">        
                Ultima Viagem
        </div>

       

        <div class="form1">
            <form action="controller/insert_viagem.php" method="POST">
            

            <?php 

            $saveiro = new Saveiro();

            $lista = $saveiro->getviagem();
            foreach ($lista as $item):

            ?>

            <?php endforeach; ?>

            

                <input type="hidden" name="tipo_veiculo_idtipo_veiculo" value="<?php echo $item['tipo_veiculo_idtipo_veiculo']; ?>">
                <input type="hidden" name="veiculo_id_veiculo" value="<?php echo $item['veiculo_id_veiculo']; ?>">
                <label>KM SAÍDA</label>
                <input class="form-control" type="text" readonly  placeholder="Ainda não há dados" value="<?php echo $item['km_saida']; ?>"> <br />
                <label>KM CHEGADA</label>
                <input class="form-control" type="text" readonly  placeholder="Ainda não há dados" value="<?php echo $item['km_chegada']; ?>" > <br />
                <label>MOTORISTA</label>
                <input class="form-control" type="text" readonly  placeholder="Ainda não há dados" value="<?php echo $item['motorista']; ?>"><br />
                <label>ÚLTIMO DESTINO</label>
                <input class="form-control" type="text" readonly  placeholder="Ainda não há dados" value="<?php echo $item['destino']; ?>">

            

        </div>

        <div>
            <hr />
        </div>

        <div class="texto4">        
                Viagem Atual
        </div>

        <div class="form1">
           
                <label>KM SAÍDA</label>
                <input class="form-control" name="km_saida" type="number"  placeholder="KM SAÍDA"> <br />
                <label>KM CHEGADA</label>
                <input class="form-control" type="number" name="km_chegada" placeholder="KM CHEGADA"> <br />
                <label>HÁRIO SAÍDA</label>
                <input class="form-control" type="time" name="hora_saida" placeholder="HORÁRIO SAÍDA"><br />
                <label>HÁRIO CHEGADA</label>
                <input class="form-control" type="time" name="hora_chegada" placeholder="HORÁRIO CHEGADA"> <br />
                <label> MOTORISTA</label>
                <input class="form-control" type="text" name="motorista" placeholder="NOME MOTORISTA"> <br />
               <label> DATA SAÍDA</label>
                <input class="form-control" type="date" name="data_saida" placeholder="DATA"><br />
                <label> DATA CHEGADA</label>
                <input class="form-control" type="date" name="data_chegada" placeholder="DATA"><br />
               <label> DESTINO</label>
                <input class="form-control" type="text" name="destino" placeholder="DESTINO"><br />

        </div>

        <div class="bot">    
                <button type="submit" id="pesquisar" name="pesquisar" value="valida" class="btn btn-success bot">ENVIAR DADOS</button>


                </form>
        </div>

        <footer>
                <div class="icones">
                    <div class="sub_item" >
                        <a href="saveiro.php"><i class="fa fa-arrow-left" style="font-size: 30px;"></i></a>
                    </div>
                    <div class="sub_item2">
                        <a href="index.php"><i class="fa fa-house" style="font-size: 30px;"></i>

                    </div>
                    
                </div>  
                <marquee> &copy;copyright 2022 "Fábio Vasques"</marquee>
                
        </footer>

    </div>
    <!--link  para icone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!--Modal para Usuario com  Sucesso -->

 <div class="modal fade" id="success-alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          <p><i class="fas fa-check-circle"></i> &nbsp;&nbsp; &nbsp; Sejá bem vindo! </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>




</body>
</html>
            