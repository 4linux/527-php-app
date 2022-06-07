<?php
include 'config.php';

function conectar() 
{
	global $config;

	foreach( $config as $chave => $valor ){
		$conexao[] = "$chave = $valor";
	}
	$conexao = implode ( " ", $conexao );
	
	pg_connect( $conexao ); ;
}

function inserir($tabela, $dados) 
{
	#INSERT INTO tabela(campo1,campo2....)values(valor1,valor2...)
	foreach( $dados as $campo => $valor ){
		$campos[] = $campo;
		$valores[] = "'$valor'";
	}
	
	$campos = implode( ',', $campos );
	$valores = implode( ',', $valores );
	$sql = "INSERT INTO $tabela($campos)VALUES($valores)";
	return pg_query( $sql );
	
}
/* string tabela, string onde = "campo = valor", array dados */
function editar($tabela, $onde, $dados) 
{
		#UPDATE TABELA SET CAMPO1 = 'VALOR1', CAMPO2 = 'VALOR2' WHERE CAMPO = 'VALOR'
		foreach ( $dados as $campo => $valor ){
				$sets[] = "$campo = '$valor'";
		}
		$sets = implode( ',' , $sets );
		$sql = "UPDATE $tabela SET $sets WHERE $onde";
		return pg_query( $sql );
}
function excluir($tabela, $onde=null) 
{
		$sql = "DELETE FROM $tabela WHERE $onde";
		return  pg_query( $sql );
}

function listar($tabela, $campos = "*", $onde = null, $ordem=null, $limite=null) 
{
	#SELECT CAMPOS FROM TABELA WHERE ONDE 
	$sql = "SELECT $campos FROM $tabela";
	
	if( $onde ){
		$sql .= " WHERE {$onde['campo']} {$onde['tipo']} '{$onde['valor']}'";
	}

	if( $ordem ){
		$sql .= " ORDER BY $ordem ";
	}

	if( $limite ){
		$sql .= " LIMIT $limite";
	}

	$query = pg_query( $sql );
	return pg_fetch_All( $query );
		
}
function ver($tabela, $onde, $campos = "*") 
{
	$sql = "SELECT $campos FROM $tabela WHERE $onde";
	$query = pg_query( $sql );
	return pg_fetch_array ( $query );
}

function fazerLogin($email, $password) 
{
	$sql = "SELECT * FROM funcionarios WHERE email = $1 AND senha = $2";
	$result = pg_prepare("my_query", $sql);
	$result = pg_execute("my_query", [$email, $password]);
	$return = pg_fetch_assoc($result);
	return $return; 
}





















