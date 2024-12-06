<?php include "./../admin/auth.php"; ?>
<a href="./type.php">Back to Square 1</a>
<form method="post" action="" id="main" enctype="multipart/form-data">
    <select name="page" required>
        <option value="home">Home Page</option>
        <option value="spiegelspel">Spiegel Spel</option>
        <option value="dienstverleening">Dienst Verleening</option>
        <option value="other">Other</option>
    </select><br>
    Paragraph Number: <input type="text" name="paragraph" required><br>
    Text:<br>
    <textarea name="text" form="main"></textarea><br>
    Image:<br>
    <input type="file" name="image"><br>
    Alt tag:<br>
    <input type="text" name="alt-tag"><br>
    <input type="submit" value="submit">
</form>

<?php
if (isset($_POST["page"])) {
    include "./img-upload.php";
    include "./../../database/connect.php";
    $page = $_POST["page"];
    $paragraph = $_POST["paragraph"];
    // $stmt = $conn->prepare("SET GLOBAL max_allowed_packet=67108864");
    // $stmt->execute();
    // 
    $stmt = $conn->prepare("SELECT * FROM `cms` WHERE `page` = '$page' AND `paragraph` = '$paragraph'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $text = $_POST["text"];
    $alt_tag = $_POST["alt-tag"];
    $stmt = $conn->prepare(
        "INSERT INTO cms (`page`, `paragraph`, `text`, `image`, `alt-tag`) VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->execute([$page, $paragraph, $text, $imgBlob, $alt_tag]);
    echo "Data successfully inserted into the database.";
    if ($result != "") {
        echo "entry already exists, conflicting entry added";
        echo "<pre>";
        print_r($result);
    }
}
