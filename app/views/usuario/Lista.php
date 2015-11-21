<?php 
    $Rows = $GLOBALS['Rows']; // Linhas de registro 
    $n_row = $GLOBALS['n_row']; // Total de linhas
?>   
<div class="container">
    <div class="page-header">
        <h1>Usuário</h1>
    </div>
    
   <p><a href="?r=usuario/novo" class="btn btn-large btn-primary">Novo Usuário</a></p>
    
   <form action="" method="POST" class="form-horizontal">
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Coluna</label>
    <div class="col-sm-6">
        <select class="form-control" placeholder="Coluna" name="COLUNA">
                   <option value="0">ID</option>
                   <option value="1">Nome Completo</option>
                   <option value="2">CPF</option>
                   <option value="3">Login</option>
                   <option value="4">e-mail</option>
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
  <div class="panel-heading">Registros de Usuário</div>

   <table class="table table-hover table-bordered">
        <tr>
            <th align="center">#</th>
            <th>Nome Completo</th>
            <th>CPF</th>
            <th>Login</th>
            <th>Email</th>
            <th></th>
        </tr>
        <?php
           
        for($i=0;$i<$n_row;$i++){
            echo '<tr>';
            echo '<td align="center">'.$Rows[$i][0].'</td>';
            echo '<td>'.$Rows[$i][1].'</td>';
            echo '<td>'.$Rows[$i][2].'</td>';
            echo '<td>'.$Rows[$i][3].'</td>';
            echo '<td>'.$Rows[$i][4].'</td>';
            echo '<td><a href="?r=usuario/editar/'.$Rows[$i][0].'">Editar</a> ';
            echo '<a href="?r=usuario/delete/'.$Rows[$i][0].'">Delete</a></td>';
            echo '</tr>';
        }
    ?>
    </table>
  </div>
</div>
