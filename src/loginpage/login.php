<html>
    <head>
        <title>Bejelentkezés</title>
        <link rel="stylesheet" type="text/css" href="css/login.css" >
    </head>
</html>

<?php
    include_once 'header.php';

?>

<section class="login-form">
    <div class="login-form-form">
        <div class="h2">
            <h2>Bejelentkezés</h2>
        </div>
        <div class="hr">
            <hr>
        </div>
        <form  action="includes/login.inc.php" method="post">
            <div class ="input i">
                <input type = "text" name = "uid" class = "label" placeholder = " " />
                    <div class = "cut uid"></div>
                <label for="uid" class = "placeholder">Felhasználónév</label>
            </div>
            <div class ="input i">
                <input type = "password" name = "pwd" class = "label" placeholder = " " />
                    <div class = "cut pwd"></div>
                <label for="pwd" class = "placeholder">Jelszó</label>
            </div>
            <button type="submit" name="submit" id="submit">Bejelentkezés</button>
        <form>
    </div>
    
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo '<script type="text/javascript">';
            echo 'alert("Minden mező kitöltése kötelező!")';  
            echo '</script>'; 
        }else if($_GET["error"] == "wronglogin")
        {
            echo '<script type="text/javascript">';
            echo 'alert("A felhasználónév vagy a jelszó hibásan lett megadva!")';  
            echo '</script>'; 
        }  
    }
    ?>
</section>

<?php
    include_once 'footer.php';

?>