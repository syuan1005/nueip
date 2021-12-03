<?php
if (isset($_POST["action"]) && ($_POST["action"] == "add")) {

    include("connMySQL.php");

    $account = $_POST["account"];
    $name = $_POST["cname"];
    $gender = $_POST["gender"];
    $birthday = $_POST['birthday'];
    $mail = $_POST['mail'];
    $note = $_POST['note'];

    $sql_query = "INSERT INTO  account_info (account, cname, gender, birthday, mail, note) VALUES ('$account', '$name', '$gender','$birthday','$mail','$note')";

    mysqli_query($db_link, $sql_query);
    header("Location: index.php");
}
?>


<html>

<head>
    <meta charset="UTF-8" />
    <title>新增會員資料</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <form action="" method="post" name="formAdd" id="formAdd">
        帳號：<input type="text" name="account" id="account"><br />
        姓名：<input type="text" name="cname" id="cname"><br />
        性別：<input type="text" name="gender" id="gender"><br />
        生日：<input type="date" name="birthday" id="birthday"><br />
        信箱：<input type="text" name="mail" id="mail"><br />
        備註：<input type="text" name="note" id="note"><br />
        <input type="hidden" name="action" value="add">
        <input type="submit" name="button" class="btn btn-primary" value="新增資料">
        <input type="reset" name="button2" class="btn btn-success" value="重新填寫">
    </form>
</body>

</html>