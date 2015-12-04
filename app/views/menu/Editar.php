<?php $Rows = $GLOBALS['Rows'];?> 
<div class="container">
    <div class="page-header">
         <h1>Editar - Menu</h1>
    </div>
        <?php echo (!isset($GLOBALS['msg'])?'':$GLOBALS['msg']);?>
    <div class="row">
        <div class="col-lg-6">
        <form action="" method="POST">
            <div class="form-group">
              <label for="menu_Nome">Nome do Menu</label>
              <input type="text" class="form-control" id="menu_Nome"
                     name="menu_Nome"  value="<?php echo $Rows[0][1]?>"
                     placeholder="Nome do Menu">
            </div>
            <div class="form-group">
              <label for="menu_Link">Link</label>
              <input type="text" class="form-control" id="menu_Link"
                     name="menu_Link" value="<?php echo $Rows[0][2]?>"
                     placeholder="Link">
            </div>
            <div class="form-group">
              <label for="menu_Inativo">Ativo</label>
              <input type="checkbox" class="form-control" id="menu_Inativo"
                     name="menu_Inativo" <?php if($Rows[0][3]=='on'){echo "checked";}else{echo "";}?>/>
            </div>
            <button type="submit" class="btn btn-default" id="bntsalvar" name="bntsalvar"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>
            <input type="hidden" id="menu_IdMenu" name="menu_IdMenu" value="<?php echo $_SESSION['ID'][1];?>" />
        </form>
        </div>
    </div>
</div>