<?php include "./../admin/auth.php"; ?>
<a href="./type.php">Back to Square 1</a>
    <?php
    include "./../../database/connect.php";
    $_SESSION['paragraph'] = $_GET['paragraph'];
    $page_chosen = $_SESSION["page"];
    $paragraph_chosen = $_SESSION["paragraph"];
    $stmt = $conn->prepare("SELECT * FROM `cms` WHERE `page` = :page_chosen AND `paragraph` = :paragraph_chosen");
    $stmt->bindParam(':page_chosen', $page_chosen, PDO::PARAM_INT); // Adjust PDO::PARAM_* type based on your data type
    $stmt->bindParam(':paragraph_chosen', $paragraph_chosen, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <form method="post" id="main" action="" enctype="multipart/form-data">
        Text:<br>
        <textarea name="text" form="main"><?= htmlspecialchars($result['text']) ?></textarea><br>
        Image:<br>
        <input type="file" name="image"><br>
        Alt tag:<br>
        <input type="text" name="alt-tag" value="<?= $result['alt-tag'] ?>"><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        include "./img-upload.php";
        $page = $_SESSION["page"];
        $paragraph = $_GET["paragraph"];
        $text = $_POST["text"];
        $alt_tag = $_POST["alt-tag"];

        $stmt = $conn->prepare(
            "UPDATE `cms` SET `page`= ?,`paragraph`= ?,`text`= ?,`image`= ?,`alt-tag`= ? WHERE `paragraph` = ? AND `page` = ?"
        );
        $stmt->execute([$page, $paragraph, $text, $imgBlob, $alt_tag, $paragraph, $page]);
        echo "Successfully updated the database.";
    } else {
        echo "No valid file uploaded.";
    }
    ?>