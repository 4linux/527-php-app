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
            <h1>Lista de Funcionários</h1>
        </legend>
        <div class="btn-toolbar">
            <a href="incluirFuncionario.php"><button class="btn btn-primary">Novo Funcionário</button></a>
        </div>
        <div class="well">
            <table width="100%" class="table">
                <col style="width:10%">
                <thead>
                    <tr class="bold">
                        <td>#</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Perfil</td>
                        <td style="width: 36px;">Ações</td>
                    </tr>
						  <?php foreach( listar( 'funcionarios' ) as $registro ){ ?>
							  <tr class="bold">
		                     <td><?php echo $registro['id'] ?></td>
		                     <td><?php echo $registro['nome'] ?></td>
		                     <td><?php echo $registro['email'] ?></td>
		                     <td>	
										<?php 
										$perfil = ver( 'perfis',"id = {$registro['prf_id']}","nome" );
										echo $perfil['nome'];
									   ?>
									</td>
		                     <td style="width: 36px;">
										<a href="alterarFuncionario.php?id=<?php echo $registro['id'] ?>">
										<i class="icon-pencil"></i></a>
										<a href="excluirFuncionario.php?id=<?php echo $registro['id']?>">											
										<i class="icon-pencil"></i></a>
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
