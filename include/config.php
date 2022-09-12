<?php
	$config = array( 'host'      => 'database',
						  'dbname'    => $_ENV["POSTGRES_DB"],
						  'user'      => $_ENV["POSTGRES_USER"],
						  'password'  => $_ENV["POSTGRES_PASSWORD"] 
						);
