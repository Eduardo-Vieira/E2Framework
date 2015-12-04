<div class="container">
    <div class="page-header">
        <h1>Cadastro Novo</h1>
    </div>
       <?php echo (!isset($GLOBALS['msg'])?'':$GLOBALS['msg']);?>
    <div class="row">
        <div class="col-lg-6">
        <form action="" method="POST">

            <div class="form-group">
              <label for="pess_Nome">Nome do Menu</label>
              <input type="text" class="form-control" id="menu_Nome"
                     name="menu_Nome"  value=""
                     placeholder="Nome do Menu">
            </div>
            <div class="form-group">
              <label for="pess_telefone">Link</label>
              <input type="text" class="form-control" id="menu_Link"
                     name="menu_Link" value=""
                     placeholder="Link">
            </div>
            <div class="form-group">
              <label for="pess_ativo">Inativo</label>
              <input type="checkbox" class="form-control" id="menu_Inativo"
                     name="menu_Inativo" />
            </div>
            <button type="submit" class="btn btn-default" id="bntsalvar" name="bntsalvar"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>           
        </form>
        </div>
    </div>    
</div>

