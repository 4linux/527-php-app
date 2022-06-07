<?php 
    include('../include/bootstrap.php'); 
	include("topo.php"); 
	if( !verificarLogin() ){
		header( 'location:login.php' );
	}
	
?>
<div class="row">
    <div class="span12">
        <legend class="">
            <h1>Tipos de encomenda</h1>
        </legend>
        <div class="btn-toolbar">
            <a href="incluirTipoencomenda.php"><button class="btn btn-primary">Novo Tipo de Encomenda</button></a>
        </div>
        <div class="well">
            <table width="100%" class="table">
                <col style="width:10%">
                <thead>
                    <tr class="bold">
                        <td>#</td>
                        <td>Nome</td>
                        <td>Valor Km</td>
                        <td>Prazo Máximo</td>
                        <td style="width: 36px;">Ações</td>
                    </tr>
						  <?php foreach( listar( 'tipos_encomenda' ) as $registro ){ ?>
							  <tr class="bold">
		                     <td><?php echo $registro['id'] ?></td>
		                     <td><?php echo $registro['nome'] ?></td>
		                     <td><?php echo $registro['valor_km'] ?></td>
		                     <td><?php echo $registro['prazo_maximo'] ?></td>
		                     <td style="width: 36px;">
										 <a href="alterarTipoencomenda.php?id=<?php echo $registro['id'] ?>"><i class="icon-pencil"></i></a>
										<a href="excluirTipoencomenda.php?id=<?php echo $registro['id'] ?>"><i class="icon-remove"></i></a>
									</td>
		                 </tr>
							<?php } ?>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("rodape.php"); ?>
