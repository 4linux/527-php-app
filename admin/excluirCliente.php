<?php	
	include '../include/bootstrap.php';
	session_start();
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}
	if( excluir( 'clientes', " id = {$_GET['id']}" ) ){
		header( 'location:clientes.php' );
	}

