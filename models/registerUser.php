<?php
header('Content-Type: application/json');


function validate_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = validate_input($_POST['username']);
    $email = validate_input($_POST['email']);
    $password = validate_input($_POST['password']);
    $confirm_password = validate_input($_POST['confirm_password']);

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        http_response_code(400);
        echo json_encode(["message" => "Todos os campos são obrigatórios."]);
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["message" => "Formato de email inválido."]);
        exit();
    }

    if ($password !== $confirm_password) {
        http_response_code(400);
        echo json_encode(["message" => "As senhas não coincidem."]);
        exit();
    }

    if (strlen($password) < 6) {
        http_response_code(400);
        echo json_encode(["message" => "A senha deve ter pelo menos 6 caracteres."]);
        exit();
    }

    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nome = :username OR email = :email");
        $stmt->execute(['username' => $username, 'email' => $email]);
        if ($stmt->rowCount() > 0) {
            http_response_code(409);
            echo json_encode(["message" => "Nome de usuário ou email já está em uso."]);
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:username, :email, :password)");
        $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashed_password]);

        http_response_code(201);
        echo json_encode(["message" => "Usuário registrado com sucesso!"]);
    } catch(PDOException $e) {
        http_response_code(500);
        echo json_encode(["message" => "Erro no servidor: " . $e->getMessage()]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Método não permitido."]);
}
