<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="username" max="32" placeholder="username" required>
        <input type="text" name="email" max="32" placeholder="email" required>
        <input type="text" name="password" max="32" placeholder="password" required>
        <input type="submit">
    </form>
    <?php
    // include "./encrypt_keys.php";
    include "./../../database/connect.php";
    require $_SERVER['DOCUMENT_ROOT'] . '/focus6/codewave6/vendor/autoload.php';
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/focus6/codewave6/');
    $dotenv->load();
    if (isset($_POST["username"])){
        $username = $_POST["username"];
        $stmt = $conn->prepare("SELECT * FROM admin WHERE 'username' = '$username'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<pre>"; print_r($result);
        if ($result){
            echo "username already exists";
        }
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = openssl_encrypt(
        $_POST['password'], "AES-256-CBC",
        $_ENV["PASSPHRASE"],
        $options = 0, 
        $iv = $_ENV["IV_STRING"]
    );
    $stmt = $conn->prepare("INSERT INTO admin (username, email, password) VALUES ('$username' , '$email' , '$password')");
    $stmt->execute();
    }
    ?>
</body>
</html>