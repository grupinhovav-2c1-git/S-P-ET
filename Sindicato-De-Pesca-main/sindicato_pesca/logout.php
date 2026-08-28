<?php
require_once 'includes/header.php';
require_once 'config/conexao.php'; ?>

<div class="d-flex justify-content-center align-items-center " style="margin-top: 6%; margin-bottom: 6%;">
          <div  style="background-image:linear-gradient(to bottom,#39722d, #4dc832); text-align: center; padding:1%">
            <h1>Sindicato de pesca</h1>
            <h4>Tem certeza que deseja sair de sua conta? </h4>
            <p>A conta será desconectada, para acessa-la novamente entre na area de login</p>
            
            <a href="entrar.php">
                <button type="button" class="btnvermelho">
                  Sair
                </button>
              </a>

              <a href="index.php">
                <button type="button" class="btnverde">
                  Continuar
                </button>
              </a>

        </div>

<?php
require_once 'includes/footer.php';
?>