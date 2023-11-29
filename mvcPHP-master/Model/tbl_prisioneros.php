<?php
class tbl_prisioneros
{
	private $pdo;

    public $id_preso;
    public $nombre;
    public $apellido;
    public $fechaN;
    public $estado;
	public $direccion;
    public $sexo;
    public $motEnc;

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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_prisioneros");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_preso)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM tbl_prisioneros WHERE id_preso = ?");
			$stm->execute(array($id_preso));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_preso)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_prisioneros WHERE id_preso = ?");

			$stm->execute(array($id_preso));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE tbl_prisioneros SET
			nombre = ?,
			apellido = ?,
			fechaN = ?,
			estado = ?,
			direccion = ?,
			sexo = ?,
			motEnc = ?
			WHERE id_preso = ?";
	

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->nombre,
						$data->apellido,
						$data->fechaN,
						$data->estado,
						$data->direccion,
						$data->sexo,
						$data->motEnc,
						$data->id_preso
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(tbl_prisioneros $data)
	{
		try
		{
			$sql = "INSERT INTO tbl_prisioneros (id_preso, nombre, apellido, fechaN, estado, direccion, sexo, motEnc)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->id_preso,
					$data->nombre,
					$data->apellido,
					$data->fechaN,
					$data->estado,
					$data->direccion,
					$data->sexo,
					$data->motEnc
				)
				
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
