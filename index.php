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
                  case "register":
                    include "public/views/register.php";
                    break;
                  
                  case "login":
                    include "public/views/login.php";
                    break;
                    
                    case "dashboard":
                    include "public/views/dashboard.php";
                    break;
                    
                    case "consults":
                    include "public/views/list-consult.php";
                    break;

                  // case "new":
                  //     include "new-user.php";
                  //     break;
                  // case "list":
                  //     include "list-users.php";

                  //     break;
                  // case "save":
                  //     include "save-user.php";

                  //     break;
                  // case "edit-user":
                  //     include "edit-user.php";

                  //     break;

                  default:
                    include "public/views/home.php";
                    break;
                }
                ?>
      
</body>

</html>