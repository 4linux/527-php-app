<?php
	function logar( $email, $password ){
		if( $usuario = ver( 'funcionarios', " email = '$email' AND senha = '$password'" ) ) {
			$_SESSION['usuario'] = $usuario['nome'];
			if( $usuario['prf_id'] == 2 ){
				$_SESSION['perfil'] = array ( 'tiposencomenda.php', 'mensagens.php' );
			}else{
				$_SESSION['perfil'] = array ( 'tiposencomenda.php', 'mensagens.php','index.php', 'clientes.php', 'funcionarios.php' );
			}
		}
	
	}

	function logarSeguro( $email, $password ){
		if( $usuario = fazerLogin( $email, $password ) ) {
			$_SESSION['usuario'] = $usuario['nome'];
			if( $usuario['prf_id'] == 2 ){
				$_SESSION['perfil'] = array ( 'tiposencomenda.php', 'mensagens.php' );
			}else{
				$_SESSION['perfil'] = array ( 'tiposencomenda.php', 'mensagens.php','index.php', 'clientes.php', 'funcionarios.php' );
			}
		}
	
	}

	function deslogar(){
		session_destroy();
	}

	function verificarLogin(){
		if( isset( $_SESSION['usuario'] ) ){
			return true;
		}else{
			return false;
		}
	}

