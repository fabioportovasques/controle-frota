<?php 

require 'classes/veiculo.class.php';

$saveiro = new Saveiro();

$lista = $saveiro->getplacas();
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
    <title>Saveiros</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/bootstrap.min.js" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
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
            <source media="(min-width: 300px)" srcset="assets/img/logo.png" 
              data-toggle="tooltip" data-placement="bottom" title="Escolha uma imagem">
                 <img src="assets/img/logo.png" width="100%">
            </picture>
            
        </div>

        <div class="texto1">
        
                Controle de Frotas Defend
         
        </div>

      <div class="texto2">
          
              <p>
                  Selecione Uma Placa
              </p>
          
      </div>

      <div class="pesquisa form-group">
           <form action="saveiro_viagem.php" method="POST">
               <select class="pesquisa form-control" name="pesquisar_placa">
               <?php foreach ($lista as $item){

                        ?>

                   <option ><?php echo $item['placa_veiculo'];  ?> </option>
                   
               <?php 
                }
                ?>

                  
               </select>
   

          
        </div>

        <div class="bot">
        <button type="submit" class="btn btn-success bot" name="pesquisar">Continuar</button>
        
        </form>
        </div>

        <div class="img1">
            <picture>
                <img src="assets/img/saveiro.png" width="100%" >
            </picture>
        </div>

        <div>
            <hr />
        </div>

        <footer>
            <div>
                <!-- <i class="fa fa-house"></i> -->
                <a href="index.php"><i class="fa fa-arrow-left" style="font-size: 30px;"></i></a>
                <br />
                <br />
                <br />
                <marquee> &copy;copyright 2022 "Fábio Vasques"</marquee>
            </div>
        </footer>

    </div>
    <!--link  para icone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</body>
</html>
            