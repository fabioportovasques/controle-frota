
<?php 

/*
	?>
	<pre>
		<?php
			var_dump($_POST);
		?>		
	</pre>
	<?php 
*/
	

//include 'ajax/ajax-cad-viagem.php';
require '../classes/viagem.class.php';


$viagem = new Viagem();

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

		$viagem ->adicionar($data_saida,$data_chegada,$hora_saida,$hora_chegada,$km_chegada,$km_saida,$destino,$motorista,
		$tipo_veiculo_idtipo_veiculo,$veiculo_id_veiculo);




?>