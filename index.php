<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");


echo json_encode($usuarios);
*/

//carregar um usuário
//$root = new Usuario();

//$root->loadById(25);


//echo $root;

//carrega a lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);


//carrega pesquisa

//$search = Usuario::search("creu");

//echo json_encode($search);



//carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("CREUSA","12345");
echo $usuario;
 ?>