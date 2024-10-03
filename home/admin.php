<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理者介面</title>
</head>
<body background="1.jpg">
    <center>
    <h2>體適能學習</h2>
    <hr width="70%" color="red">
    <style>a{text-decoration:none}</style>
    <big><b>
    <a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="illustrate.html">網頁說明</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="animation.html">動作敘述</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
    <a href="reserve.php">體適能學習預約</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="picture.php">照片區</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
    <a href="about_we.html">關於我們</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;<a href="login.php">登入</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="logout.php">登出</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="register.php">註冊</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </b></big><br>
    <!-- InstanceBeginEditable name="main" -->
    <?php
    // 資料庫配置
    $servername = "localhost";
    $username = "root";
    $password = "3013856paul";
    $dbname = "fitness_learning";

    // 建立連接
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    // 查詢所有用戶的帳號和密碼
    $sql = "SELECT account, password FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 輸出資料
        echo "<h3>所有用戶的帳號資訊：</h3>";
        while($row = $result->fetch_assoc()) {
            echo "帳號: " . $row["account"]. " - 密碼: " . $row["password"]. "<br>";
        }
    } else {
        echo "無相關資料。";
    }

    // 關閉資料庫連接
    $conn->close();
    ?>
    <!-- InstanceEndEditable -->    
    </center>
</body>
</html>
