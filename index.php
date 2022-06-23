<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/dev_io/modules/session.modules.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/dev_io/modules/functions.modules.php";
$session_state = session_validate();

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CDN's -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/dev_io/modules/cdns.modules.php" ?>

    <!-- Styles -->
    <link rel="stylesheet" href="./styles/index.css">

    <title>Dev IO</title>
</head>
<body>
    <header class="d-flex justify-content-between p-3 primary-blur">
        <h2 class="bold">DEV.io</h2>
    </header>
    <main class="container-fluid d-flex justify-content-around">
        <div class="menu-left--aside primary-blur">
            <ul class="menu-left">
                <li class="menu-left--item <?= session_validate_element($session_state) ?>">
                    <a href="./src/pages/" class="menu-left--link">
                        <div class="icon--container">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        Perfil
                    </a>
                </li>
                <li class="menu-left--item <?= !session_validate_element($session_state) ?>">
                    <a href="src/pages/" class="btn btn-primary w-100">Create Account</a>
                </li>
                <li class="menu-left--item <?= !session_validate_element($session_state) ?>">
                    <a href="src/pages/" class="btn btn-light w-100">Login</a>
                </li>
                <hr>
                <li class="menu-left--item">
                    <a href="./src/pages/" class="menu-left--link">
                        <div class="icon--container">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        Home
                    </a>
                </li>
            </ul>
        </div>
        <div class="main-content primary">
            <iframe src="./src/pages/posts/" frameborder="0"></iframe>
        </div>
    </main>
</body>
</html>

