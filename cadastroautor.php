<?php
//Incluindo classes
include 'Classes/Autor.class.php';
include 'Classes/Conexao.class.php';

//conexão com o banco
//instanciando a conexão
$conexao = new Conexao;
//passando os valores
$conexao->Servidor = "localhost";
$conexao->Usuario = "root";
$conexao->SenhaBanco = "";
$conexao->Banco = "expo_desenhos";

//instanciando o autor
$autor = new Autor;
//passando os valores de nome e conexão com o banco de dados
$autor->Nome = $_POST['nome_autor'];
$autor->Conexao = $conexao->Conectar();
//cadastrando no banco
$autor->CadastroAutor();

?>