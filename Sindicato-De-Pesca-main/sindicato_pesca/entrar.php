<?php
require_once 'includes/header.php';
require_once 'config/conexao.php'; ?>

<div class="d-flex justify-content-center align-items-center " style="margin-top: 6%; margin-bottom: 6%;">
          <div  style="background-image:linear-gradient(to bottom,#39722d, #4dc832); text-align: center; padding:1%">

            <form>
              <table>
                <thead>
                  
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th> <img src="imagens/Logo_S-P-ET.png" class="me-2" height="100" alt="S.P.Et Logo" loading="lazy"/> 
                    </th>
                    <td colspan="3"> <h1>Sindicato de pesca</h1>
                      <h4> Entre em uma conta </h4>
                      <p>Entre em sua conta para ter acesso as muitas funcionalidades da S.P.Et </p>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><label>Email:</label></th>
                    <td colspan="3"><input type="email" id="email" name="email" style="width: 80%;"></td>
                  </tr>
                  <tr>
                    <th scope="row"><label>Senha:</label></th>
                    <td colspan="3"><input type="password" id="password" name="password"></td>
                  </tr>
                </tbody>
              </table>
              <br>
              <a href="index.php">
                <button type="button" class="btnazul">
                  Entrar
                </button>
              </a>
            </form>
          </div>
        </div>

<?php
require_once 'includes/footer.php';
?>