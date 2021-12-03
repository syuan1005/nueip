<?php

if (isset($_POST["action"]) && $_POST["action"] == 'update') {

    include "connMySQL.php";

    $userID = $_GET['id'];
    $sql_getDataQuery = "SELECT * FROM account_info WHERE cid = $userID";
    $result = mysqli_query($db_link, $sql_getDataQuery);

    $row_result = mysqli_fetch_assoc($result);
    $cid = $row_result['cid'];
    $account = $row_result['account'];
    $cname = $row_result['cname'];
    $birthday = $row_result['birthday'];
    $mail = $row_result['mail'];

    $newAccount  = $_POST['account'];
    $newName = $_POST['cname'];
    $newGender = $_POST['gender'];
    $newBirthday = $_POST['birthday'];
    $newEmail = $_POST['mail'];
    $newNote = $_POST['note'];
    $sql_query = "UPDATE account_info SET account = '$newAccount', cname = '$newName', gender = '$newGender', birthday = '$newBirthday', mail = '$newEmail', note = '$newNote' WHERE cid = $userID";

    mysqli_query($db_link, $sql_query);
    $db_link->close();
    header("Location: index.php");
}

?>

<html>

<head>
    <meta charset="UTF-8" />
    <title>修改會員資料</title>
</head>

<body>
    <form action="" method="post" name="formAdd" id="formAdd">

        帳號：<input type="text" name="account" id="account" value=" <?php echo $id ?>"><br />
        姓名：<input type="text" name="cname" id="cname" value=" <?php echo $cname ?>"><br />
        性別：<input type="text" name="gender" id="gender" value="<?php echo $gender ?>"><br />
        生日：<input type="date" name="birthday" id="birthday" value="<?php echo $birthday ?>"><br />
        信箱：<input type="text" name="mail" id="mail" value="<?php echo $mail ?>"><br />
        備註：<input type="text" name="note" id="note" value="<?php echo $note ?>"><br />
        <input type="hidden" name="action" value="update">
        <input type="submit" name="button" value="修改資料">
    </form>
</body>

</html>