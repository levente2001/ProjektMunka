<?php
    include_once 'header.php';

?>


<DOCTYPE html>
<html lang='hu'>
    <head>
        <link href="css/singup.css" rel="stylesheet">
    </head>
</html>
<section class="signup-form">
    <div class="signup-form-form">
        <div class ="h2">
            <h2>Regisztráció</h2>
        </div>
        <div class="hr">
            <hr>
        </div>
            <form  action="includes/signup.inc.php" method="post">
            <div class="input-container ic2">
                <input type="text" name="name" id="name" class="label" placeholder=" " />
                    <div class="cut"></div>
                <label for="name" class="placeholder">Teljes név</label>
            </div>
            <div class="input-container ic2">
                <input type="text" name="email" id="email" class="label" placeholder=" " />
                    <div class="cut email"></div>
                <label for="email" class="placeholder">Email</label>
            </div>
            <div class="input-container ic2">
                <input type="text" name="uid" id="uid" class="label" placeholder=" " />
                    <div class="cut userid"></div>
                <label for="uid" class="placeholder">Felhasználónév</label>
            </div>
            <div class="input-container ic2">
                <input type="password" name="pwd" id="pwd" class="label" placeholder=" " />
                    <div class="cut pwd"></div>
                <label for="pwd" class="placeholder">Jelszó</label>
            </div>
            <div class="input-container ic2">
                <input type="password" name="pwd_repeat" id="pwd_repeat" class="label" placeholder=" " />
                    <div class="cut pwd_repeat"></div>
                <label for="pwd_repeat" class="placeholder">Jelszó ismét</label>
            </div>
            <button type="submit" name="submit" id="submit">Regisztráció</button>
        <form>
    </div>

    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "<p>Minden mezőt kitöltése kötelező!</p>";
        }else if($_GET["error"] == "invaliduid")
        {
            echo "<p>írjon be egy helyes felhasználó nevet!</p>";
        }
        else if($_GET["error"] == "invalidemail")
        {
            echo "<p>írjon be egy helyes felhasználó nevet!</p>";
        }
        else if($_GET["error"] == "passwordsdontmact")
        {
            echo "<p>A jelszavak nem egyeznek!</p>";
        }
        else if($_GET["error"] == "stmtfailed")
        {
            echo "<p>Valami hiba történt,próbálja újra!</p>";
        }
        else if($_GET["error"] == "stmtfailed")
        {
            echo "<p>Valami hiba történt,próbálja újra!</p>";
        }
        else if($_GET["error"] == "usernametaken")
        {
            echo "<p>Felhasználónév foglalt!</p>";
        }
        else if($_GET["error"] == "none")
        {
            echo "<p>Regisztráció sikeres!</p>";
        }   
    }
?>
</section>

<?php
    include_once 'footer.php';

?>