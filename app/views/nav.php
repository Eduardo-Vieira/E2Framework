<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  href="/">
            <img src="public/imagens/logo.png" class="navbar-brand"/>
          </a>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Início</a></li>
            <?php
                if(isset($_SESSION['USER'])){
            ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                role="button" aria-haspopup="true" aria-expanded="false"
                >Cadastros Básicos <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="?r=usuario">Usuário</a></li>
                    <li><a href="?r=pessoas">Pessoas</a></li>
                  </ul>
                </li>
          <?php
            }
          ?>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php
                if(isset($_SESSION['USER'])){
                
            ?>
                <li><a href="?r=login/sair">Sair</a></li>
            <?php
                }else{
            ?>
                <li><a href="?r=login">Login</a></li>
                <?php
                }
                ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
