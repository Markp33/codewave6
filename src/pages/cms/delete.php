
<?php
include "./../admin/auth.php";
include "./../../database/connect.php";
?>
<a href="./type.php">Back to Square 1</a>
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
        <th>Delete</th>
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
            <th>
                <form method="get" action="./delete_script.php"><input type="text" name="deleted" value="<?= $item["id"] ?>" hidden><input type="submit" value="Delete"></form>
            <th>
        </tr>

    <?php
    }
    ?>
</table>