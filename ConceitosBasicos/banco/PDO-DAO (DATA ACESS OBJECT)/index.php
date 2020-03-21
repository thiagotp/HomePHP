<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//TESTE DO LOADBYID
//CARREGA UM USUARIO
root = new Usuario();
$root->loadById(3);

echo $root;

//TESTE DO GETLIST
//CARREGA UMA LISTA DE USUARIO
$list = Usuario::getList();

echo json_encode($list);

//CARREGA UMA LISTA POR UMA BUSCA
$search = Usuario::search("jo");

echo json_encode($search);

//CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA PARA IDENTIFICAR
$root->login("login que existe no banco"," senha que existe no banco");

//INSERE UM USUÁRIO NA TABELA POR MEIO DE UM PROCEDURE
$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@feoa");
$aluno->insert();

echo $aluno;
//INSERE UM USUÁRIO NA TABELA POR MEIO DE UM PROCEDURE
//COM CONSTRUTOR
$aluno2 = new Usuario("thiago","fuejai");
echo $aluno;

//UPDATE DE UM USUARIO PELO ID
$usuario = new Usuario();

$usuario->loadById(2);

$usuario->update("professoro","!@!#%%");


//DELETANDO UM USUÁRIO PELO ID
$usuario = new Usuario();

$usuario->loadById(3);

$usuario->delete();
?>