<?php
class detpreso
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto detpreso
    public $IdPreso;
    public $Altura;
    public $Compleccion;
    public $Tes;
	public $Nombre;
	public $Peso;
    public $FechaN;
    public $Condena;

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método selecciona todas las tuplas de la tabla
	//detpreso en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM detpreso");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del detpreso a partir del IdPreso
	//utilizando SQL.
	public function Obtener($IdPreso)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el IdPreso del detpreso.
			$stm = $this->pdo->prepare("SELECT * FROM detpreso WHERE IdPreso = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro IdPreso.
			$stm->execute(array($IdPreso));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla detpreso dado un IdPreso.
	public function Eliminar($IdPreso)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM detpreso WHERE IdPreso = ?");

			$stm->execute(array($IdPreso));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el IdPreso del detpreso.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE detpreso SET
						Altura          = ?,
						Compleccion        = ?,
            Tes        = ?,
			Peso        = ?,
			Nombre        = ?,
			FechaN        = ?,
			Condena        = ?
				    WHERE IdPreso = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Altura,
                        $data->Compleccion,
                        $data->Tes,
						$data->Peso,
                        $data->Nombre,
                        $data->FechaN,
						$data->Condena,
                        $data->IdPreso
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo detpreso a la tabla.
	public function Registrar(detpreso $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO detpreso (IdPreso,Altura,Compleccion,Tes,Peso,Nombre,FechaN,Condena)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->IdPreso,
                    $data->Altura,
                    $data->Compleccion,
                    $data->Tes,
					$data->Peso,
                    $data->Nombre,
                    $data->FechaN,
				    $data->Condena,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
