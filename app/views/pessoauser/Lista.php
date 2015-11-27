<?php 
    $Rows = $GLOBALS['Rows']; // Linhas de registro 
    $n_row = $GLOBALS['n_row']; // Total de linhas
?>   
<div class="container">
    <div class="page-header">
        <h1>Pessoas User</h1>
    </div>

   <form action="" method="POST" class="form-horizontal">
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Coluna</label>
    <div class="col-sm-6">
        <select class="form-control" placeholder="Coluna" name="COLUNA">
                   <option value="0">ID</option>
        </select>
    </div>
    </div>
    <div class="form-group">
    <label for="inputParametro" class="col-sm-2 control-label">Parâmetro</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="PARAMENTRO" name="PARAMENTRO" placeholder="Parâmetro">
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
        <button type="submit" class="btn btn-default" id="BUSCAR" name="BUSCAR">Buscar</button>
    </div>
    </div>
   </form>
   
<!---------------- Tabela de Registro --------------------->
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Registros de Pessoas</div>

   <table class="table table-hover table-bordered">
        <tr>
            <th align="center">#</th>
            <th>Data Cad.</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ativo</th>
           
        </tr>
        <?php
           
        for($i=0;$i<$n_row;$i++){
            echo '<tr>';
            echo '<td align="center">'.$Rows[$i][0].'</td>';
            echo '<td>'.$Rows[$i][1].'</td>';
            echo '<td>'.$Rows[$i][2].'</td>';
            echo '<td>'.$Rows[$i][3].'</td>';
            echo '<td>'.$Rows[$i][4].'</td>';
            echo '<td>'.$Rows[$i][5].'</td>';
            echo '<td>'.$Rows[$i][6].'</td>';
            echo '<td>'.$Rows[$i][7].'</td>';
            echo '</tr>';
        }
    ?>
    </table>
  </div>
</div>


