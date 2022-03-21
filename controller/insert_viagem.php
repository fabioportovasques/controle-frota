
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
include 'viagem.class.php';


$viagem = new Viagem();

        $data_saida = $_POST['data_saida'];
		$data_chegada = $_POST['data_chegada'];
		$hora_saida= $_POST['hora_saida'];
		$hora_chegada = $_POST['hora_chegada'];
		$km_chegada = $_POST['km_chegada'];
		$km_saida = $_POST['km_saida'];
		$destino = $_POST['destino'];
        $motorista= $_POST['motorista'];
		

		$viagem ->adicionar($data_saida,$data_chegada,$hora_saida,$hora_chegada,$km_chegada,$km_saida,$destino,$motorista);




?>