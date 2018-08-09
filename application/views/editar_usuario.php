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
        <h1>Editar Usuário</h1>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url() ?>usuario/salvar_atualizacao" method="post">
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>" >
            <div class="form-group">
                <label for="nome">Nome:</label> <input class="form-control" id="nome" name="nome" placeholder="Informe o nome..." value="<?= $usuario[0]->nome ?>"  required="" type="text" /> </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF:</label> <input class="form-control" id="cpf" name="cpf" placeholder="Informe o cpf..." value="<?= $usuario[0]->cpf ?>" required="" type="text" /> </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label> <input class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço..." value="<?= $usuario[0]->endereco ?>" required="" type="text" /> </div>
                </div>
                <div class="col-md-2">
                    <label for="nivel">Nível: </label> 
                    <select class="form-control" id="nivel" name="nivel" required="">
                        <option value="0"> --- </option> 
                        <option value="1" <?= $usuario[0]->nivel == 1 ? 'selected ' : ''; ?>> Administrador </option> 
                        <option value="2" <?= $usuario[0]->nivel == 2 ? 'selected ' : ''; ?>> Usuário </option> 
                    </select> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label> <input class="form-control" id="email" name="email" placeholder="Informe o email..." value="<?= $usuario[0]->email ?>"required="" type="email" /> </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="senha">Senha: </label> 
                        <input class="btn btn-default btn-block" type="button" data-toggle="modal" data-target="#exampleModal" value="Atualizar Senha"/> </div>
                </div>
                <div class="col-md-2">
                    <label for="status">Status: </label> 
                    <select class="form-control" id="status" name="status" required=""> 
                        <option value="0"> --- </option> 
                        <option value="1" <?= $usuario[0]->status == 1 ? 'selected ' : ''; ?> > Ativo </option> 
                        <option value="2" <?= $usuario[0]->status == 2 ? 'selected ' : ''; ?> > Inativo </option> 
                    </select> 
                </div>
            </div>
            <div style="text-align: left;">
                <button class="btn btn-success" type="submit">Enviar</button> 
                <button class="btn btn-default" type="reset" onClick="history.go(-1)" >Cancelar</button> </div>
        </form>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url()?>usuario/salvar_senha" method="post"> 
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atualizar senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                    <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="senha_antiga"> Senha Antiga:</label>
                        <input type="password" name="senha_antiga" id="senha_antiga" class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="senha_nova"> Nova Senha:</label>
                        <input type="password" name="senha_nova" id="senha_nova" onkeyup="checarSenha()" class="form-control">
                    </div>
                    <div class="col-md-12 form-group ">
                        <label for="senha_confirmar"> Confirmar Senha:</label>
                        <input type="password" name="senha_confirmar" id="senha_confirmar" onkeyup="checarSenha()" class="form-control">
                    </div>
                        
                        <div class="col-md-12 form-group ">
                            <div id="divcheck">
                                 
                            </div>
                        </div>

                    </div>         
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="enviarsenha" disabled >Salvar</button>
            </div>
        </div>
                </form>
    </div>
</div>



<script> 
    $(document).ready(function(){
        $ ("#senha_nova").keyup(checkPasswordMatch);
        $("#senha_confirmar").keyup(checkPasswordMatch);
    });
    
    function checarSenha () {
        var password = $("#senha_nova").val();
        var confirmPassword = $("#senha_confirmar").val();
        
        if (password == ''  || '' == confirmPassword ){
                $("#divcheck").html("<span style='color:red'> Campo de senha vazio!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else if(password != confirmPassword  ){
            $("#divcheck").html("<span style='color:red'> Senhas não conferem!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else {
             $("#divcheck").html("<span style='color:green'> Senhas iguais!</span>");
            document.getElementById("enviarsenha").disabled = false;
        }
    }
</script> 