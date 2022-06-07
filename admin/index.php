<?php 
	include('../include/bootstrap.php'); 
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}

    include('topo.php');

?>
<div class="row">
    <div class="span12">
        <h1>Dexter</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Phasellus ut nibh nec turpis consequat fringilla dictum at risus. 
            Sed eros elit, tempor eu tincidunt non, sodales nec sapien. Nunc rutrum justo ac leo gravida adipiscing. 
            Morbi bibendum feugiat pulvinar. Praesent rhoncus mauris ac tortor lobortis sit amet mollis eros interdum. 
            Vestibulum at malesuada metus. Maecenas ante lorem, imperdiet vel venenatis in, semper at odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
            Proin cursus augue vel ipsum ultrices gravida. Duis et turpis non nisl egestas porta. Aliquam vitae augue eget libero consectetur pellentesque. 
            Etiam ullamcorper facilisis dui, at cursus enim mollis eu. Quisque pretium felis et dolor auctor at pharetra est iaculis. 
        </p>
    </div>
</div>
<?php include("rodape.php"); ?>
