<div class="container">
    <div class="form-signin">
        <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Login</div>
              <?php echo $GLOBALS['msg'];?>
                <form action="?r=login/autentica" method="POST" style="padding: 20px;">
                    <div class="form-group">
                      <label for="exampleInputEmail">E-mail</label>
                      <input type="text" class="form-control" id="InputEmail"
                             name="InputEmail"
                             placeholder="usuario@email.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputpassword">Senha</label>
                      <input type="password" class="form-control" id="Inputpassword"
                             name="Inputpassword">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" 
                                id="bntLogin"
                                name="bntLogin">Entrar
                        </button>
                    </div>    
                </form>
        </div>
    </div>
</div>