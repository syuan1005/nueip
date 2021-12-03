<?php

include("connMySQL.php");

$sql_query = "SELECT * FROM  account_info ORDER BY cid ASC";
$result = mysqli_query($db_link, $sql_query);
$total_records = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>會員資料</title>
    <link rel="stylesheet" href="./css/bootstrap.css">


</head>

<body>
    <h1 align="center">會員資料總表</h1>
    <p align="center">目前資料筆數：<?php echo $total_records; ?>，<button type="button" class="btn btn-primary" onClick="window.open('create.php')">新增資料</button></p>

    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>帳號</th>
            <th>姓名</th>
            <th>性別</th>
            <th>生日</th>
            <th>信箱</th>
            <th>備註</th>
            <th>編輯</th>
        </tr>

        <?php

        while ($row_result = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row_result['cid'] . "</td>";
            echo "<td>" . $row_result['account'] . "</td>";
            echo "<td>" . $row_result['cname'] . "</td>";
            echo "<td>" . $row_result['gender'] . "</td>";
            echo "<td>" . $row_result['birthday'] . "</td>";
            echo "<td>" . $row_result['mail'] . "</td>";
            echo "<td>" . $row_result['note'] . "</td>";
            echo "<td><a href='update.php?id=" . $row_result['cid'] . "'>修改</a> ";
            echo "<a href='delete.php?id=" . $row_result['cid'] . "'>刪除</a></td>";
            echo "</tr>";
        }




        ?>

    </table>


</body>

</html>