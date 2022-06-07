<?php 
    include('../include/bootstrap.php'); 
	include('topo.php');
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}
	if( $_POST ){
		if( inserir( 'tipos_encomenda', $_POST ) ){
			header( 'location:tiposencomenda.php' );
		}
	}
?>
<div class="row">
    <div class="span12">
        <form class="form-horizontal" action='' method="POST">
            <fieldset>
                <div id="legend">
                    <legend class=""><h1>Novo Tipo de encomenda</h1></legend>
                </div>
               <div class="control-group">
                    <label class="control-label" for="nome">Nome</label>
                    <div class="controls">
                        <input type="text" id="nome" name="nome"  class="input-xlarge">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="valor_km">Valor Km</label>
                    <div class="controls">
                        <input type="text" id="valor_km" name="valor_km" class="input-xlarge">

                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="prazo_maximo">Prazo Máximo</label>
                    <div class="controls">
                        <input type="text" id="prazo_maximo" name="prazo_maximo" class="input-xlarge">                           
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
