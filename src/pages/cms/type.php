<?php 
include "./../admin/auth.php"; 
include "./../../database/connect.php";
?>
<a href="./update.php">Update</a>
<a href="./insert.php">Insert</a>
<a href="./delete.php">Delete</a>
<?php
$stmt = $conn->prepare("SELECT * FROM `cms`");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>Page</th>
        <th>Paragraph</th>
        <th>Text</th>
        <th>Image</th>
        <th>Alt Text</th>
    </tr>
    <?php
    foreach ($result as $item) {
    ?>

        <tr>
            <th><?= $item["page"] ?></th>
            <th><?= $item["paragraph"] ?></th>
            <th><?= $item["text"] ?></th>
            <th><img height="50px" width="50px" src="<?= $item["image"] ?>"></th>
            <th><?= $item["alt-tag"] ?></th>
        </tr>

    <?php
    }
    ?>
</table>