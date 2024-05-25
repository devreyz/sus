<?php


$response = new stdClass();

$response->message = "";
$response->status = 200;
$response->redirect = false;

$username = "";
$email = "";
$password = "";
$confirm_password = "";


function validate_input($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = validate_input($_POST['username']);
    $email = validate_input($_POST['email']);
    $password = validate_input($_POST['password']);
    $confirm_password = validate_input($_POST['confirm_password']);

    // Verifica se todos os campos estão preenchidos
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $response->message = "Todos os campos são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Valida formato do email
        $response->message = "Formato de email inválido.";
    } elseif ($password !== $confirm_password) {
        // Verifica se as senhas coincidem
        $response->message = "As senhas não coincidem.";
    } elseif (strlen($password) < 6) {
        // Verifica o comprimento da senha
        $response->message = "A senha deve ter pelo menos 6 caracteres.";
    } else {
        try {
            // Verifica se o nome de usuário ou email já está em uso
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
            $stmt->execute(['username' => $username, 'email' => $email]);
            if ($stmt->rowCount() > 0) {
                $response->message = "Nome de usuário ou email já está em uso.";
            } else {
                // Criptografa a senha
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Insere o novo usuário no banco de dados
                $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashed_password]);

                header("Location: ?app=login");
            }
        } catch (PDOException $e) {
            $response->message = "Erro no servidor: " . $e->getMessage();
        }
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Adicione o link para o CSS do Tailwind -->
    <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />

</head>

<body class="bg-gray-100 h-screen flex flex-col justify-between">
    <!-- Header -->
    <header class="shadow bg-gradient-to-r from-blue-800 to-blue-500 text-white py-4 flex items-center">
        <nav class="mx-auto px-4 container flex gap-6 items-center">

            <div class="">
                <img class="w-20 h-20" src="public/assets/sus-brasil-logo.svg" alt="" />
            </div>
            <div class="container mx-auto">
                <h1 class="text-3xl font-bold">Seja Bem-vindo!</h1>
                <p class="text-lg">
                    Sua plataforma de saúde online.
                </p>
            </div>
        </nav>
    </header>
    <!-- Cadastro Section -->
    <section class="py-12">
        <div class="container mx-auto flex items-center justify-center">

            <div class="bg-white rounded-lg p-8 shadow-md w-96">
                <h2 class="text-2xl font-bold mb-4">Faça seu Cadastro</h2>
                <form action="?app=register" method="POST">
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 font-bold mb-2">Nome</label>
                        <input type="text" id="username" name="username" value="<?= $username ?? "" ?>" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" value="<?= $email ?? "" ?>" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-bold mb-2">Senha</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="confirm_password" class="block text-gray-700 font-bold mb-2">Confirmar Senha</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Cadastrar</button>

                    <?php
                    echo "<span class=\"text-red-400 text-sm\">$response->message</span>"
                    ?>
                </form>
                <p class="mt-4 text-sm text-gray-600">
                    Já tem uma conta? <a href="?app=login" class="text-blue-500 hover:underline">Faça login aqui</a>.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto">
            <p class="text-center">
                © 2024 Todos os direitos reservados.
            </p>
        </div>
    </footer>


</body>

</html>