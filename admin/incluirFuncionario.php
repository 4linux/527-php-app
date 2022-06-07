<?php 
    include('../include/bootstrap.php'); 
	include('topo.php');
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}

	if( $_POST ){
		$_POST['senha'] = md5( $_POST['senha'] );
		if( inserir( 'funcionarios', $_POST ) ){
			header( 'location:funcionarios.php' );
		}
	}
?>
<div class="row">
    <div class="span12">
        <form class="form-horizontal" action='' method="POST">
            <fieldset>
                <div id="legend">
                    <legend class=""><h1>Novo Funcionário</h1></legend>
                </div>
               <div class="control-group">
                    <label class="control-label" for="nome">Nome</label>
                    <div class="controls">
                        <input type="text" id="nome" name="nome"  class="input-xlarge">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input type="text" id="email" name="email" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="senha">Senha</label>
                    <div class="controls">
                        <input type="password" id="senha" name="senha" class="input-xlarge">                           
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="prf_id">Perfil</label>
                    <div class="controls">
                        <select name="prf_id">
									<option value = "" selected = "true">SELECIONE </option>
									<?php foreach( listar('perfis') as $perfil ){ ?>
                           	 <option value="<?php  echo $perfil['id'] ?>">
													<?php  echo $perfil['nome'] ?>
										 </option>
									<?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <input type="submit" value="Incluir" >
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<?php include("rodape.php"); ?>
