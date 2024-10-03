<?php
	session_start();
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<body background="1.jpg">
	<center>
	<!-- InstanceBeginEditable name="title" -->
		<!-- InstanceEndEditable -->
		
		<h2>體適能學習</h2>
		<hr width="70%" color="red">
		<style>a{text-decoration:none}</style>
		<big><b>
		<a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="illustrate.html">網頁說明</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="animation.html">動作敘述</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		<a href="reserve.php">體適能學習預約</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="picture.php">照片區</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		<a href="about_we.html">關於我們
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;<a href="login.php">登入</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php">登出</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</b></big><br>
		<!-- InstanceBeginEditable name="main" -->
		<center>
			<?php
				echo "網頁載入時間: ".date('Y-m-d')."<br>";	
				$datestr1="2024-06-21 00:00:00";
				echo "報名截止時間: ".$datestr1."<br>";
				echo "剩餘時間: ".round((strtotime($datestr1)-time())/(60*60*24),0)."天"."<br>";
			?>
				<form action="picture-recevie.php" method="post" enctype="multipart/form-data">
				<input type="file" name="upload_file"><br>
				<?php
				if(isset($_SESSION["check_status"]) && $_SESSION["check_status"]=="login_ok") {
					echo "<input type=\"submit\" value=\"照片上傳\">";
				} else {
					echo "<small>必須登入才能上傳照片</small>";
				}
				?>
			</form>
