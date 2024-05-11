<?php
// LoginController.php

class LoginController extends RenderView
{
    public function showLoginForm()
    {
        // Aqui você pode carregar a view para exibir o formulário de login
        $this->loadView('loginform', []);
    }

    public function authenticate()
    {
        // Aqui você irá autenticar o usuário
        // Código para verificar as credenciais e fazer login

        // Exemplo básico de autenticação
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verificação das credenciais e redirecionamento
        if ($this->isValidUser($username, $password)) {
            // Verifica se é um admin ou usuário comum
            if ($this->isAdmin($username)) {
                header("Location: /admin_panel");
            } else {
                header("Location: /home");
            }
        } else {
            // Caso as credenciais sejam inválidas, redireciona de volta para o formulário de login
            header("Location: /login");
        }
    }

    // Método de exemplo para verificar se as credenciais são válidas
    private function isValidUser($username, $password)
    {
        // Implemente a lógica de autenticação aqui
        // Você pode verificar no banco de dados, por exemplo
        // Este é apenas um exemplo básico
        return ($username == 'usuario' && $password == 'senha');
    }

    // Método de exemplo para verificar se o usuário é um admin
    private function isAdmin($username)
    {
        // Implemente a lógica para verificar se o usuário é um admin
        // Neste exemplo, consideramos que o usuário 'admin' é um administrador
        return ($username == 'admin');
    }
}
