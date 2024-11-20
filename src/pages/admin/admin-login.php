<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username" required>
        <input type="text" name="password" placeholder="password" required>
        <input type="submit">
    </form>
    <?php
    // include "./encrypt_keys.php";
    require $_SERVER['DOCUMENT_ROOT'] . '/focus6/codewave6/vendor/autoload.php';
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/focus6/codewave6/');
    $dotenv->load(); 
    if (isset($_POST["username"])){
        include "./../../database/connect.php";
        $username = $_POST['username'];
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = '$username'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<pre>"; print_r ($result);
        $password = openssl_decrypt(
            $result["password"],
            "AES-256-CBC",
            $_ENV['PASSPHRASE'],
            $options = 0,
            $iv = $_ENV['IV_STRING']
        );
        echo $password;
        if ($_POST['password'] == $password){
            session_start();
            $_SESSION['loggedin'] = true;
            header('Location: ./../cms.php');
        } else {
            echo "false, terminate now";
        }
    }

    ?>
</body>
</html>