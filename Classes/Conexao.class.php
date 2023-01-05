<?php
class Conexao
{
	public $Servidor;
	public $Usuario;
	public $SenhaBanco;
	public $Banco;

	function Conectar()
	{

		$conexao=mysqli_connect($this->Servidor,$this->Usuario,$this->SenhaBanco,$this->Banco) or die("Erro na conexão");
		return $conexao;
	}
}

?>