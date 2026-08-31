<?php
require_once 'includes/header.php';
require_once 'config/conexao.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = trim($_POST['name'] ?? '');
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $senha = $_POST['password'] ?? '';

    if (empty($nome) || !$email || empty($senha)) {
        $mensagem = '<div class="alert alert-warning">Preencha todos os campos corretamente.</div>';
    } else {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        try {
            // Insere no banco bd_spet
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $pdo->prepare($sql);
            
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':senha', $senhaHash);

            if ($stmt->execute()) {
                echo "<script>alert('Conta criada com sucesso!'); window.location.href='index.php';</script>";
                exit;
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $mensagem = '<div class="alert alert-danger">Este e-mail já está cadastrado.</div>';
            } else {
                $mensagem = '<div class="alert alert-danger">Erro no banco de dados: ' . $e->getMessage() . '</div>';
            }
        }
    }
}
?>

        <div class="d-flex justify-content-center align-items-center" style="margin-top: 6%; margin-bottom: 6%;">
          <div style="background-image:linear-gradient(to bottom,#39722d, #4dc832); text-align: center; padding:1%">

            <?php if (!empty($mensagem)) echo $mensagem; ?>

            <form method="POST">
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
                      <h4> Crie sua conta </h4>
                      <p>Crie sua conta para ter acesso as muitas funcionalidades da S.P.Et </p>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row"><label for="email">Email:</label></th>
                    <td colspan="3"><input type="email" id="email" name="email" style="width: 80%;" required></td>
                  </tr>
                  <tr>
                    <th scope="row"><label for="name">Nome:</label></th>
                    <td><input type="text" id="name" name="name" required></td>
                    <th scope="row"><label for="password">Senha:</label></th>
                    <td><input type="password" id="password" name="password" required></td>
                  </tr>
                </tbody>
              </table>
              <br>
              <button type="submit" class="btnazul">
                Criar
              </button>
            </form>
          </div>
        </div>
        
<?php
require_once 'includes/footer.php';
?>
