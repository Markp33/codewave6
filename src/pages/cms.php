<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION["loggedin"]) {
        echo "youre logged in as " . $_SESSION["user"] .  "<br>";
    ?>
            <form>
                <select method="get" action="" name="page">
                    <option value="home">Home Page</option>
                    <option value="spiegelspel">Spiegel Spel</option>
                    <option value="dienstverleening">Dienst Verleening</option>
                    <input type="submit" value="Choose Page">
                </select>
                Paragrph Number: <input type="number">
            </form>
    <?php
    } else {
        echo "please login as admin <a href='./admin/admin-login.php'>here</a>";
    };
    ?>
</body>

</html>