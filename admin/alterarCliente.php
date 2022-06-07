<?php 
    include('../include/bootstrap.php'); 
	include('topo.php'); 
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}
	
	$registro = ver( 'clientes', " id = {$_GET['id']}" );
	if( $_POST ){
		if( editar( 'clientes', " id = {$_GET['id']}", $_POST ) ){
			header( 'location:clientes.php' );
		}
	}

?>
<div class="row">
    <div class="span12">
        <form class="form-horizontal" action='' method="POST">
            <fieldset>
                <div id="legend">
                    <legend class=""><h1>Alterar Cliente</h1></legend>
                </div>
                <div class="control-group">
                    <label class="control-label" for="nome_razao">Nome / Razão Social</label>
                    <div class="controls">
                        <input type="text" id="nome_razao" name="nome_razao" value="<?php echo $registro['nome_razao'] ?>" class="input-xlarge">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="cpf_cnpj">CPF/CNPJ</label>
                    <div class="controls">
                        <input type="text" id="cpf_cnpj" name="cpf_cnpj" value="<?php echo $registro['cpf_cnpj'] ?>" class="input-xlarge">

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
                        <input type="password" id="senha" name="senha" value="<?php echo $registro['senha'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="telefone">Telefone</label>
                    <div class="controls">
                        <input type="text" id="telefone" name="telefone" value="<?php echo $registro['telefone'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="celular">Celular</label>
                    <div class="controls">
                        <input type="text" id="celular" name="celular" value="<?php echo $registro['celular'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="endereco">Endereço</label>
                    <div class="controls">
                        <input type="text" id="endereco" name="endereco" value="<?php echo $registro['endereco'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="bairro">Bairro</label>
                    <div class="controls">
                        <input type="text" id="bairro" name="bairro" value="<?php echo $registro['bairro'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="cidade">Cidade</label>
                    <div class="controls">
                        <input type="text" id="cidade" name="cidade" value="<?php echo $registro['cidade'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="estado">Estado</label>
                    <div class="controls">
                        <input type="text" id="estado" name="estado" value="<?php echo $registro['estado'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="cep">CEP</label>
                    <div class="controls">
                        <input type="text" id="cep" name="cep" value="<?php echo $registro['cep'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <input type="submit" >
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<?php include("rodape.php"); ?>
