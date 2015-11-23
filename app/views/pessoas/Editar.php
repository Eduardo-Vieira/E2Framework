<?php $Rows = $GLOBALS['Rows'];?> 
<div class="container">
    <div class="page-header">
         <h1>Editar - Pessoas</h1>
    </div>
        <?php echo $GLOBALS['msg'];?>
    <div class="row">
        <div class="col-lg-6">
        <form action="" method="POST">
            <div class="form-group">
                <label for="pess_dtCad">Data Cad.</label>
                <p><?php echo $Rows[0][1]?></p>
                <input type="hidden" class="form-control" id="pess_dtCad"
                     name="pess_dtCad"  value="<?php echo $Rows[0][1]?>"/>
            </div>
            <div class="form-group">
              <label for="pess_Nome">Nome</label>
              <input type="text" class="form-control" id="pess_Nome"
                     name="pess_Nome"  value="<?php echo $Rows[0][2]?>"
                     placeholder="Nome">
            </div>
            <div class="form-group">
              <label for="pess_telefone">Telefone</label>
              <input type="text" class="form-control" id="pess_telefone"
                     name="pess_telefone" value="<?php echo $Rows[0][3]?>"
                     placeholder="Telefone">
            </div>
            <div class="form-group">
              <label for="pess_email">e-Mail</label>
              <input type="email" class="form-control" id="pess_email"
                     name="pess_email" value="<?php echo $Rows[0][4]?>"
                     placeholder="email@email.com">
            </div>
            <div class="form-group">
              <label for="pess_ativo">Ativo</label>
              <input type="checkbox" class="form-control" id="pess_ativo"
                     name="pess_ativo" <?php if($Rows[0][5]=='on'){echo "checked";}else{echo "";}?>/>
            </div>
            <button type="submit" class="btn btn-default" id="bntsalvar" name="bntsalvar"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>
            <input type="hidden" id="pess_ID" name="pess_ID" value="<?php echo $_SESSION['ID'][1];?>" />
        </form>
        </div>
    </div>
</div>