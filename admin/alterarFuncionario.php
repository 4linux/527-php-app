<?php 
    include('../include/bootstrap.php'); 
	include('topo.php'); 
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}

	$registro = ver( 'funcionarios', " id={$_GET['id']}" );

	if( $_POST ){
		if( $_POST['senha'] == '123456' ){
			unset( $_POST['senha'] );
		}else{
			$_POST['senha'] = md5( $_POST['senha'] );
		}
		if( editar( 'funcionarios', " id={$_GET['id']}", $_POST ) ){
			header( 'location:funcionarios.php' );
		}
	}
?>
<div class="row">
    <div class="span12">
        <form class="form-horizontal" action='' method="POST">
            <fieldset>
                <div id="legend">
                    <legend class=""><h1>Alterar Funcionário</h1></legend>
                </div>
                <div class="control-group">
                    <label class="control-label" for="nome">Nome</label>
                    <div class="controls">
                        <input type="text" id="nome" name="nome" value="<?php echo $registro['nome'] ?>" class="input-xlarge">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input type="text" id="email" name="email" value="<?php echo $registro['email'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="senha">Senha</label>
                    <div class="controls">
                        <input type="password" id="senha" name="senha" value="123456" class="input-xlarge">                           
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="prf_id">Perfil</label>
                    <div class="controls">
                        <select name="prf_id">
									 <?php foreach( listar( 'perfis') as $perfil ){ ?>
 <option value = "<?php echo $perfil['id'] ?>" <?php echo ( $perfil['id'] == $registro['prf_id'] ) ? 'selected = true' : '' ?>>
												<?php echo $perfil['nome'] ?>
											</option>
									 <?php } ?> 
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <input type="submit" value="Alterar" >
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<?php include("rodape.php"); ?>
