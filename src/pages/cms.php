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
        echo "You're logged in as " . htmlspecialchars($_SESSION["user"]) . "<br>";
    ?>
        <form method="post" action="" id="main" enctype="multipart/form-data">
            <select name="page" required>
                <option value="home">Home Page</option>
                <option value="spiegelspel">Spiegel Spel</option>
                <option value="dienstverleening">Dienst Verleening</option>
            </select><br>
            Paragraph Number: <input type="number" name="paragraph" required><br>
            Text:<br>
            <textarea name="text" form="main"></textarea><br>
            Image:<br>
            <input type="file" name="image"><br>
            <input type="submit" value="submit">
        </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['page'])) {
        echo "Page is set.<br>";

        // Unique file name for the image
        $uid = uniqid();
        $imageName = $uid . "_" . basename($_FILES['image']['name']);
        $uploadPath = './../img/cms-img/' . $imageName;

        // Validate and move uploaded file
        if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            die("File upload error: " . $_FILES['image']['error']);
        }
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
            die("Failed to move uploaded file to destination.");
        }

        // Convert image to binary data
        $path =  $uploadPath;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $imgBlob = 'data:image/' . $type . ';base64,' . base64_encode($data);
        // $imgBlob = base64_encode(file_get_contents($_FILES['image']['tmp_name']));

        // Include database connection
        include "./../database/connect.php";

        // Get form data
        $page = $_POST["page"];
        $paragraph = $_POST["paragraph"];
        $text = $_POST["text"];

        // Insert data into database
        try {
            $stmt = $conn->prepare(
                "INSERT INTO cms (page, paragraph, text, image) VALUES (?, ?, ?, ?)"
            );
            $stmt->execute([$page, $paragraph, $text, $imgBlob]);
            echo "Data successfully inserted into the database.";
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }
    } else {
        echo "Please login as admin <a href='./admin/admin-login.php'>here</a>";
    }

    $stmt = $conn->prepare(
        "SELECT * FROM cms WHERE page = 'home'"
    );
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<pre>"; print_r($result);

?>
<img src="<?= $result["image"] ?>" alt="">
</body>

</html>
