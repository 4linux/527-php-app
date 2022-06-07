<?php
	include 'banco.php';
	conectar();

	$_POST['nome'] = "Maria dos Santos";
	$_POST['email'] = 'mary@gamil.com';

	//inserir( 'clientes', $_POST );

	//editar( 'usuarios', ' id = 10', $_POST );
	$onde = array( 'campo' => 'nome_razao',
						'tipo'  => '=',
						'valor' => 'teste'
					);
	listar( 'clientes', 'nome_razao, email', $onde );
