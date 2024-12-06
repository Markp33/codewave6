<?php include "./../admin/auth.php"; ?>
<a href="./type.php">Back to Square 1</a>

<form method="post" action="" id="main" enctype="multipart/form-data">
    <select name="page" required>
        <option value="home">Home Page</option>
        <option value="spiegelspel">Spiegel Spel</option>
        <option value="dienstverleening">Dienst Verleening</option>
    </select><br>
    <input type="submit" value="send">
</form>
<?php
if (isset($_POST["page"])){
    $_SESSION['page'] = $_POST['page'];
    // echo $_POST["page"];
    include "./../../database/connect.php";
    $stmt = $conn->prepare("SELECT * FROM `cms` WHERE `page` = :page_chosen");
    $stmt->bindParam(':page_chosen', $_POST['page'], PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $_POST["page"];
    // echo "<pre>"; print_r($result);
    ?>
    <form method="get" action="./update-input.php">
        <select name="paragraph">
    <?php
    foreach($result as $item){
        ?>
        <option value="<?= $item["paragraph"]?>"><?php echo $item["paragraph"]?>
        <?php
    }
    ?>
        </select>
        <input type="submit">
    </form>
    <?php
}
?>