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
            <h1>Lista de Mensagens</h1>
        </legend>

        <div class="well">
            <table width="100%" class="table">
                <col style="width:10%">
                <thead>
                    <tr class="bold">
                        <td>#</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Assunto</td>
                        <td style="width: 36px;">Ações</td>
                    </tr>
							<?php foreach( listar( 'fale_conosco' ) as $registro ) { ?>
								<tr class="bold">
		                     <td><?php echo $registro['id'] ?></td>
		                     <td><?php echo $registro['nome'] ?><</td>
		                     <td><?php echo $registro['email'] ?><</td>
		                     <td><?php echo $registro['assunto'] ?><</td>
		                     <td style="width: 36px;">
										<a href="verMensagem.php?id=<?php echo $registro['id'] ?>">
											<icon class="icon-eye-open"></i></a>
										<a href="excluirMensagem.php?id=<?php echo $registro['id'] ?>">
											<icon class="icon-remove"></i></a>
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
