<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dexter Logística™</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="../include/css/bootstrap.css" rel="stylesheet">
        <link href="../include/css/bootstrap-responsive.css" rel="stylesheet">
        <script src="../include/js/jquery.js"></script>
        <script src="../include/js/bootstrap.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <!-- Barra menus -->
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="index.php">
                        Dexter Logística™ Admin
                    </a>
                    <ul class="nav">
                        <?php
                        $paginas[] = array('url' => 'index.php', 'label' => 'Início');
                        $paginas[] = array('url' => 'clientes.php', 'label' => 'Clientes');
                        $paginas[] = array('url' => 'funcionarios.php', 'label' => 'Funcionários');
                        $paginas[] = array('url' => 'tiposencomenda.php', 'label' => 'Tipos de Encomenda');
                        $paginas[] = array('url' => 'mensagens.php', 'label' => 'Mensagens');	
								#$perfil_motorista = array ( 'tiposencomenda.php', 'mensagens.php' );
					$_SESSION['perfil'] = ( isset ($_SESSION['perfil']) ) ? $_SESSION['perfil']  : array();
					foreach( $paginas as $pagina ){
							    if( !in_array( $pagina['url'], $_SESSION['perfil'] ) ){
										continue;
								 }
                        ?>
						<li <?php echo ( verificarPagina( $pagina ) ) ? ' class = active' : '' ?> > 
							<a href="<?php echo $pagina['url'] ?>"><?php echo $pagina['label'] ?></a>
						</li>
					<?php } ?>
                    </ul>
                    <div class="btn-group pull-right">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                 						<i class="icon-user"></i> 
					<?php echo ( isset( $_SESSION["usuario"] ) ) ? $_SESSION["usuario"] : '' ?> 
											<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-wrench"></i> Opções</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="icon-share"></i> Logout</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div><!-- navbar -->
