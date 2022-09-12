<?php 
		include 'include/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dexter Logística™</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="include/css/bootstrap.css" rel="stylesheet">
        <link href="include/css/bootstrap-responsive.css" rel="stylesheet">
        <script src="include/js/jquery.js"></script>
        <script src="include/js/bootstrap.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="index.php">Dexter Logística™</a>
                    <ul class="nav">
     					<?php foreach( listar( 'paginas', 'url,label' ) as $pagina ){ ?>
						
						<li  <?php echo ( verificarPagina( $pagina ) ) ? "class = 'active'" : '' ?> >
							<a href="<?php echo $pagina['url'] ?>"> <?php echo $pagina['label'] ?></a>
						</li>
					<?php } ?>
                    <li>
                        <a href="../admin/">Admin</a>
                    </li>
                    </ul>
                    
                </div>
            </div>
















