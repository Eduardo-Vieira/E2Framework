<div class="container">
    <div class="page-header">
        <h1>Usuário</h1>
    </div>
        <?php echo $GLOBALS['msg'];?>
        <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome Completo</label>
              <input type="text" class="form-control" id="usua_NomeCompleto"
                     name="usua_NomeCompleto" value=""
                     placeholder="Nome Completo">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">CPF</label>
              <input type="text" class="form-control" id="usua_cpf"
                     name="usua_cpf"  value=""
                     placeholder="CPF">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Login</label>
              <input type="text" class="form-control" id="usua_login"
                     name="usua_login" value=""
                     placeholder="Login">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">e-Mail</label>
              <input type="email" class="form-control" id="usua_email"
                     name="usua_email" value=""
                     placeholder="email@email.com">
            </div>
            <button type="submit" class="btn btn-default" id="bntsalvar" name="bntsalvar">Salvar</button>           
        </form>
        
</div>

