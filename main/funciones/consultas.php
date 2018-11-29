<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');



//Consultar USARIOS
function getUsuarios(){
	$usuarios = mysql_query("SELECT * FROM clientes");

	$resultado ='<table class="table table-striped">
					<thead>
				  <tr>
				  	<th scope="col">ID</th>
					<th scope="col">NOMBRE</th>
					<th scope="col">APELLIDOS</th>
					<th scope="col">USER</th>
					<th scope="col">PASS</th>
					<th scope="col">EMAIL</th>
					<th scope="col">TELÉFONO</th>
					<th scope="col">>NIVEL</th>
					<th></th>
					<th></th>
				  </tr> </thead>';

	while($fila = mysql_fetch_array($usuarios)){

	$resultado .='<tr>
					<td>'.$fila['id_cliente'].'</td>
					<td>'.$fila['nombre'].'</td>
					<td>'.$fila['apellidos'].'</td>
					<td>'.$fila['user'].'</td>
					<td>'.$fila['pass'].'</td>
					<td><a href="mailto:'.$fila['email'].'">'.$fila['email'].'</a></td>
					<td><a href="tel:'.$fila['telefono'].'">'.$fila['telefono'].'</a></td>
					<td>'.$fila['nivel'].'</td>
					<td><a href="editar_usuarios.php?id='.$fila['id_cliente'].'" class="enlace_rojo">Editar</a></td>
					<td><a href="borrar_usuarios.php" class="enlace_rojo">Borrar</a></td>
				  </tr>';
	}

	$resultado .='</table>';
	return $resultado;
}
//fin function getUsuarios()

//consular Pacientes

function getPacientes(){

	$pacientes = mysql_query("SELECT * FROM pacientes");

	$resultado ='<table>
				  <tr>
				  <th><strong>ID</strong></th>
					<th><strong>RUT</strong></th>
					<th><strong>NOMBRES</strong></th>
					<th><strong>APELLIDOS</strong></th>
					<th><strong>SEXO</strong></th>
					<th><strong>ANT. FAMILIARES</strong></th>
					<th><strong>ANT. PERSONALES</strong></th>
					<th><strong>TELEFONO</strong></th>
					<th><strong>PREVISIÓN</strong></th>
					<th><strong>DIRECCIÓN</strong></th>
					<th><strong>CORREO</strong></th>
					<th><strong>FECHA NACIMIENTO</strong></th>
					<th><strong>TIPO ENFERMEDAD</strong></th>
					<th></th>
					<th></th>
				  </tr>';

					while($fila = mysql_fetch_array($pacientes)){

					$resultado .='<tr>

									<td>'.$fila['id_paciente'].'</td>
									<td>'.$fila['rut'].'</td>
									<td>'.$fila['nombre'].'</td>
									<td>'.$fila['apellidos'].'</td>
									<td>'.$fila['sexo'].'</td>
									<td>'.$fila['antecedentes_familiares'].'</td>
									<td>'.$fila['antecedentes_personales'].'</td>
									<td><a href="tel:'.$fila['telefono'].'">'.$fila['telefono'].'</a></td>
									<td>'.$fila['prevision'].'</td>
									<td>'.$fila['direccion'].'</td>
									<td><a href="mailto:'.$fila['correo'].'">'.$fila['correo'].'</a></td>
									<td>'.$fila['fecha_nacimiento'].'</td>

									<td><a href="editar_paciente.php?id='.$fila['id_paciente'].'" class="enlace_rojo">Editar</a></td>
									<td><a href="borrar_paciente.php" class="enlace_rojo">Borrar</a></td>
									</tr>';
								}

	$resultado .='</table>';
	return $resultado;
}



?>
