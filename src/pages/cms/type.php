<?php 
include "./../admin/auth.php"; 
include "./../../database/connect.php";
?>
<form method="post" action="">
            <select name="type">
                <option value="update">Update</option>
                <option value="insert">Insert</option>
                <option value="delete">Delete</option>
            </select>
            <input type="submit" value="send">
</form>
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
<?php
if (isset($_POST["type"])){
    header("Location: ./" . $_POST["type"] . ".php");
}
?>