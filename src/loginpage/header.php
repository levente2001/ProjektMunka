<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>To Do List Main</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/header.css" />
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <ul>
                    <li><a href="index.php" class="yoshi">Yoshihiro Kft.</a></li>
                    <li><a href="about.php">Rólunk</a></li>
                    <?php
                        if(isset($_SESSION["useruid"]))
                        {
                            echo "<li><a href='todolist.php'>Feladatok</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Kijelentkezés</a></li>";
                        }else
                        {
                            echo "<li><a href='signup.php'>Regisztráció</a></li>";
                            echo "<li><a href='login.php'>Bejelentkezés</a></li>";
                        }
                    ?>
                    
                </ul>
            </div>
        </nav>