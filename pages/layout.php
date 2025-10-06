<?php require './config.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nama_aplikasi ?></title>

    <!-- Style -->
    <link rel="stylesheet" href="./assets/scripts/main.css">
    <link rel="stylesheet" href="./assets/styles/output.css">

    <!-- Jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="./assets/scripts/main.js" defer></script>
</head>

<body
    x-data="{'page': 'Dashboard', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false}"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}">
    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
        <?php include 'sidebar.php'; ?>
        <div
            class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <?php include 'header.php'; ?>

            <?php if (!isset($_GET['page']))
                $_GET['page'] = 0; ?>
            <?php
            if ($_GET['page']) {
                require_once 'pages/' . $_GET['page'] . '.php';
            } else {
                require_once 'pages/dashboard.php';
            }
            ?>

        </div>
    </div>
    <!-- ===== Page Wrapper End ===== -->
</body>

</html>