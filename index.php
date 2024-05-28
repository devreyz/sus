<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD com PHP e MySql</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

  <?php
  include "config.php";

  switch (@$_REQUEST["app"]) {
    case "":
      include "public/views/home.php";
      break;
    case "register":
      include "public/views/register.php";
      break;
    case "register-user":
      include "models/registerUser.php";
      break;
    case "logout":
      include "public/views/logout.php";
      break;
    case "user-profile":
      include "public/views/profile.php";
      break;

    case "login":
      include "public/views/login.php";
      break;

    case "dashboard":
      include "public/views/dashboard.php";
      break;
    case "campaignes":
      include "public/views/campaignes.php";
      break;
    case "support":
      include "public/views/support.php";
      break;

    case "add-consult":
      include "public/views/add-consult.php";
      break;
    case "exam-results":
      include "public/views/exam-resaults.php";
      break;
    case "consults":
      include "public/views/list-consult.php";
      break;

    case "fill-profile":
      include "public/views/fill-profile.php";
      break;

    case "admin-consults":
      include "public/views/admin/admin-consults.php";
      break;
    case "login-adm":
      include "public/views/admin/login-adm.php";
      break;
    case "medic-home":
      include "public/views/admin/medic-home.php";
      break;


    default:
      include "public/views/404.php";
      break;
  }
  ?>

</body>

</html>