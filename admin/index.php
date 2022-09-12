<?php 
	include('../include/bootstrap.php'); 
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}

    include('topo.php');

?>
<div class="row">
    <div class="span12">
        <h1>Bem vindo </b> <?php echo ( isset( $_SESSION["usuario"] ) ) ? $_SESSION["usuario"] : '' ?>!!</h1>
        <p>
            Você acabou de fazer login na área Administrativa!
            <br><br>
            Esta área é <b>RESTRITA</b>.
        </p>
    </div>
</div>
<?php include("rodape.php"); ?>
