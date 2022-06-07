<?php
	include '../include/bootstrap.php';
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}
	if( excluir( 'fale_conosco', " id={$_GET['id']}" ) ){
		header( 'location:mensagens.php' );
	}

