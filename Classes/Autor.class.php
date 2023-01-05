<?php
//Classe autor
class Autor 
{
	public $Nome;
	public $Conexao;
	function CadastroAutor()
	{
		$cadastro = mysqli_query($this->Conexao, "INSERT INTO `autores`(`nome`) VALUES ('$this->Nome')");
		return $cadastro;
	}
}
?>