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
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                role="button" aria-haspopup="true" aria-expanded="false"
                >Cadastros Básicos <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="?r=usuario">Usuário</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="?r=credito">Crédito</a></li>
            <li><a href="?r=faq">FAQ</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
