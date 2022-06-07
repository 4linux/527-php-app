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
            <h1>Lista de Clientes</h1>
        </legend>
        <div class="btn-toolbar">
            <a href="incluirCliente.php">
                <button class="btn btn-primary">Novo Cliente</button>
            </a>
        </div>
        <div class="well">
            <table width="100%" class="table">
                <col style="width:10%">
                <thead>
                    <tr class="bold">
                        <td>#</td>
                        <td>Nome/Razão</td>
                        <td>Cpf/CNPJ</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>Celular</td>
                        <td style="width: 36px;">Ações</td>
                    </tr>
						  <?php  foreach( listar( 'clientes') as $registro ){ ?>
							  <tr class="bold">
		                     <td><?php echo $registro['id'] ?></td>
		                     <td><?php echo $registro['nome_razao'] ?></td>
		                     <td><?php echo $registro['cpf_cnpj'] ?></td>
		                     <td><?php echo $registro['email'] ?></td>
		                     <td><?php echo $registro['telefone'] ?></td>
		                     <td><?php echo $registro['celular'] ?></td>
		                     <td style="width: 36px;">
										<a href="alterarCliente.php?id=<?php echo $registro['id'] ?>"><i class = 'icon-pencil'> </i> </a>
										<a href="excluirCliente.php?id=<?php echo $registro['id'] ?>"><i class = 'icon-remove'> </i> </a>
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
