<?php
require_once 'models/RegisterModel.php';

class RegisterController {
  public function index() {
    include 'views/register_form.php';
  }

  public function register() {
    // Verifica se os dados do formulário foram enviados
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Valida os dados do formulário

      // Cria uma instância do Model
      $registerModel = new Register();
var_dump($_POST);
      // Chama o método para criar o usuário no Model
      $registerModel->createUser($_POST);
      // Redireciona para a página de sucesso ou outra página
      header('Location: /user');
      exit();
    } else {
      // Exibe a página de registro
      include 'views/register_form.php';
    }
  }
}

?>