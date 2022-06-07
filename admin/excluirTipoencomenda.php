<?php
	include '../include/bootstrap.php';
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}
	if( excluir( 'tipos_encomenda', " id = {$_GET['id']}" ) ){
		header( 'location:tiposencomenda.php' );
	}
