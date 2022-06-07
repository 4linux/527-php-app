<?php 
	require_once '../include/bootstrap.php';
	if( $_POST ){
        //trocar a função logar() por logarSeguro()
		if( verificarLogin( logar( $_POST['email'], $_POST['senha'] ) ) ){
			header( 'location:index.php' );
		}else{
			$erro = "Usuário ou senha incorretos!";
		}
		
	}
    include('topo.php'); 
?>
<form class="form-horizontal" action="" method="POST">
    <fieldset>
        <div id="legend">
            <legend class="">ADMIN: Dexter Logística</legend>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="username" name="email" placeholder="" class="input-xlarge">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">Senha:</label>
            <div class="controls">
                <input type="text" id="password" name="senha" placeholder="" class="input-xlarge">
            </div>
        </div>


        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success">Login</button>
            </div>
        </div>
		  <div class="alert-error">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <?php echo ( isset( $erro ) ) ? $erro : '' ?>
        </div>
    </fieldset>
</form>
<?php include('rodape.php'); ?>
