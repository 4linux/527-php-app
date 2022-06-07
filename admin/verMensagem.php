<?php 
    include('../include/bootstrap.php'); 
	include('topo.php'); 
	$registro = ver( 'fale_conosco', " id = {$_GET['id']}" );

?>
<div class="row">
    <div class="span12">
        <form class="form-horizontal" action='excluirMensagem.php' method="GET">
				<input type = "hidden" name = "id" value = "<?php echo $registro['id'] ?>">
            <fieldset>
                <div id="legend">
                    <legend class=""><h1>Ver Mensagem</h1></legend>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="nome">Nome</label>
                    <div class="controls">
                        <input  disabled = 'disabled' type="text" id="nome" name = "nome" value="<?php echo $registro['nome'] ?>" class="input-xlarge">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input  disabled = 'disabled' type="text" id="email" name = "email" value="<?php echo $registro['email'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="assunto">Assunto</label>
                    <div class="controls">
                        <input  disabled = 'disabled' type="text" id="assunto" name = "assunto" value="<?php echo $registro['assunto'] ?>" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="mensagem">Mensagem</label>
                    <div class="controls">
                        <textarea  disabled = 'disabled' id="mensagem" name = "mensagem" rows="5"><?php echo $registro['mensagem'] ?></textarea>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Clique para excluir" >
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<?php include("rodape.php"); ?>
