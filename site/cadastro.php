<?php
require '../config/database.php';

$mensagemErro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 'cliente';
    $foto = isset($_FILES['foto']['name']) && $_FILES['foto']['name'] !== "" ? $_FILES['foto']['name'] : null;

    $sqlVerifica = "SELECT email FROM usuarios WHERE email = :email";
    $stmtVerifica = $pdo->prepare($sqlVerifica);
    $stmtVerifica->bindParam(':email', $email);
    $stmtVerifica->execute();

    if ($stmtVerifica->rowCount() > 0) {
        $mensagemErro = "Esse email já está cadastrado!";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha, tipo, foto) VALUES (:nome, :email, :senha, :tipo, :foto)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':tipo', $tipo);
        
        if ($foto) {
            $stmt->bindParam(':foto', $foto);
        } else {
            $stmt->bindValue(':foto', null, PDO::PARAM_NULL);
        }

        if ($stmt->execute()) {
            header("Location: sucesso.php");
            exit();
        } else {
            $mensagemErro = "Erro ao cadastrar usuário.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../assets/css/cadastro.css">
</head>
<body>
    <div class="container">
        <h2>Cadastre-se</h2>

        <?php if (!empty($mensagemErro)): ?>
            <div id="erro-alert" style="background-color: red; color: white; padding: 10px; margin-bottom: 10px; text-align: center;">
                <?php echo $mensagemErro; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="cadastro.php" enctype="multipart/form-data">
            <input type="text" id="nome" name="nome" placeholder="Nome completo:" required>

            <input type="email" id="email" name="email" placeholder="Email:" required>

            <input type="password" id="senha" name="senha" placeholder="Senha:" required>

            <input type="text" id="numero" name ="numero" placeholder="Número de telefone (Opcional):">

            <input type="hidden" id="foto" name="foto" accept="image/*">

            <input type="hidden" name="tipo" value="cliente">

            <br>

            <button type="submit">Cadastrar</button>

            <br>

            <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
        </form>
    </div>
</body>
</html>
