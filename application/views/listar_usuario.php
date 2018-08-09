<div style="background-color: #ffffff;"class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            
          </div>
          
       
        </div>
      </nav>






    <div class="col-md-12">
     
        <center> <h1>Usuários</h1> </center>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="usuario/cadastro"> Novo Usuário</a> 
    </div>
    <div class="col-md-12">
        <table class="table table-striped"> 

            <tr> 
                <th>ID</th> 
                <th>Nome</th> 
                <th>E-mail</th> 
                <th>Status</th> 
                <th>Nível</th> 
                <th> </th> 
                <th> </th> 
            </tr>
            <?php foreach ($usuarios as $usu) { ?>
            <tr> 
                <td> <?= $usu->idUsuario; ?></td> 
                <td> <?= $usu->nome; ?></td> 
                <td> <?= $usu->email; ?></td> 
                <td> <?= $usu->status==1?'Administrador':'Usuario';?></td>  
                <td> <?= $usu->nivel==1?'Ativo':'Inativo ';?></td> 
                <td>  <a class="btn btn-primary " href="<?= base_url("usuario/atualizar/" . $usu->idUsuario) ?>"> Atualizar</a> </td>
                <td>  <a class="btn btn-danger " href="<?= base_url("usuario/excluir/" . $usu->idUsuario) ?>" onclick="return confirm('Deseja realmente excluir o usuário?');">Remover</a> </td>

            </tr>
            <?php } ?>
        </table>
    </div>
