<div class="container">
    <div class="page-header">
        <h1>Cadastro Novo</h1>
    </div>
        <?php echo(!isset($GLOBALS['msg']))? '': $GLOBALS['msg'];?>
    <div class="row">
        <div class="col-lg-6">
        <form action="" method="POST">
            <div class="form-group">
              <label for="pess_dtCad">Data Cad.</label>
              <div class='input-group date' id='datetimepicker'>
                <input type='text' class="form-control"id="pess_dtCad"
                     name="pess_dtCad" value="" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="pess_Nome">Nome</label>
              <input type="text" class="form-control" id="pess_Nome"
                     name="pess_Nome"  value=""
                     placeholder="Nome">
            </div>
            <div class="form-group">
              <label for="pess_telefone">Telefone</label>
              <input type="text" class="form-control" id="pess_telefone"
                     name="pess_telefone" value=""
                     placeholder="Telefone">
            </div>
            <div class="form-group">
              <label for="pess_email">e-Mail</label>
              <input type="email" class="form-control" id="pess_email"
                     name="pess_email" value=""
                     placeholder="email@email.com">
            </div>
            <div class="form-group">
              <label for="pess_ativo">Ativo</label>
              <input type="checkbox" class="form-control" id="pess_ativo"
                     name="pess_ativo" />
            </div>
            <button type="submit" class="btn btn-default" id="bntsalvar" name="bntsalvar"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>           
        </form>
        </div>
    </div>    
</div>

