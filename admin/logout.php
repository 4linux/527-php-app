<?php
	#elcio.gallo@buonny.com.br
	include '../include/user.php';
	session_start();
	deslogar();
	header( 'location:login.php' );
