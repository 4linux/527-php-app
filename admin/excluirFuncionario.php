<?php
	include '../include/bootstrap.php';
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}

