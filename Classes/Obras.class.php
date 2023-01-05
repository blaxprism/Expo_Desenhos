<?php
//Classe Obras
class Obras 
{
	public $Titulo;
	public $Descr;
	public $Autor;
	public $Conexao;
	function Cadastroobra($Titulo,$Descr,$Autor,$Conexao){
		mysqli_query($Conexao, "insert into `obras`(titulo,descr,autor) values (`$this->Titulo`, `$this->Descr`, `$this->Autor`)");
	}
}

?>