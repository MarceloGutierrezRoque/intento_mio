<?php 
	/**
	 * 
	 */
	class web_paginas extends database
	{
		private $table  = 'web_paginas';
		private $tid = "id_pag";
		//------------------------------------
		function callID($c1, $pag_id){ //llamar todas las columnas de la tabla por el id de la apgina, requiere al cadena de conexion y el pid que es el id de la pag
			$data = new stdClass();
			//------------------------------------
			$sql = "SELECT * FROM ".$this->table." WHERE ".$this->tid."=".$pag_id." ;";
			$res = mysqli_query($c1, $sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));//resultado de la ejecucion, res devuelve como un buleano,mas que eso es info peroe sa infos e reconoce como un buleano
			if($res){
				if($res->num_rows > 0){//la flecha es "del"
					$data->result = 1;//si esto se ejecuto correctamente voy a devolver un data
					$data->mensaje = 'Registro encontrado';
					while($row = mysqli_fetch_array($res)){
						//el id_pag no lo llamo por k ya lo tengo
						$data->nombre = $row['nombre'];//indico el nombre ed la columna que quiero traer
						$data->banner = $row['banner'];
						$data->url = $row['url'];
						$data->decrip_corta = $row['decrip_corta'];
					}
					mysqli_free_result($res);//esto es lo ultimo, libero el resultado, lo limpio para que no ocupe memoria en el servidor
					$res = null;
				}else{
					$data->result = 2;
					$data->mensaje = 'No se encontraron registros';
				}
			}else{
				$data->result = 3;
				$data->mensaje = 'No se ejecuto la consulta. Error: '.$_SESSION['Mysqli_Error'];//por que no se ejecuto
			}
			//------------------------------------dps de eso vengo y cierro mi cadena de conexion por eos el c1
			mysqli_close($c1);
			return $data;//la clase le esta devolviendo a la accion el resultado osea la variable data
		}
	}