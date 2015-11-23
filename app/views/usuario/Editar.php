<?php $Rows = $GLOBALS['Rows'];?>   
<div class="container">
        <h1>Editar - Usuário</h1>
        <?php echo $GLOBALS['msg'];?>
        <div class="row">
        <div class="col-lg-6">
        <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome Completo</label>
              <input type="text" class="form-control" id="usua_NomeCompleto"
                     name="usua_NomeCompleto"
                     value="<?php echo $Rows[0][1]?>"
                     placeholder="Nome Completo">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">CPF</label>
              <input type="text" class="form-control" id="usua_cpf"
                     name="usua_cpf"  value="<?php echo $Rows[0][2]?>"
                     placeholder="CPF">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Login</label>
              <input type="text" class="form-control" id="usua_login"
                     name="usua_login" value="<?php echo $Rows[0][3]?>"
                     placeholder="Login">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">e-Mail</label>
              <input type="email" class="form-control" id="usua_email"
                     name="usua_email"
                     value="<?php echo $Rows[0][4]?>"
                     placeholder="email@email.com">
            </div>
            <button type="submit" class="btn btn-default" id="bntsalvar" name="bntsalvar">Salvar</button>
            <input type="hidden" id="usua_ID" name="usua_ID" value="<?php echo $_SESSION['ID'][1];?>" />
                   
       </form>
       </div>
    </div>
</div>

