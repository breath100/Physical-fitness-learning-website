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
	<!-- InstanceBeginEditable name="title" -->相片分析<!-- InstanceEndEditable -->
		
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
		<?php
			echo "<center>";
		    if($_FILES['upload_file']['type']!="image/jpeg")
				{
				die("上傳檔案僅限JEPG格式檔案");
				}
			if($_FILES['upload_file']['size']>3000000)
			{
				die("上傳檔案必須小於3MB");
			}
			echo "1檔案名稱:".$_FILES['upload_file']['name']."<br>";
			echo "檔案大小:".$_FILES['upload_file']['size']."<br>";
			echo "檔案格式:".$_FILES['upload_file']['type']."<br>";
			echo "檔案位置:".$_FILES['upload_file']['tmp_name']."<br>";
			echo "檔案代碼:".$_FILES['upload_file']['error']."<br>";
			
			echo $_SERVER["PHP_SELF"]."<br>";
			echo $_SERVER['SCRIPT_FILENAME']."<br>";
			echo __FILE__."<br>";
			echo dirname(__FILE__)."<br>";
			echo basename(__FILE__)."<br>";
			if(is_dir("pictures")){echo "pictures資料夾存在";}else{echo "pictures資料夾不存在";}
			
			// 检查目标文件夹是否存在，如果不存在，则创建它
			if(!is_dir("picture")){
				mkdir("picture");
			}
		
			if($_FILES['upload_file']['error'] == UPLOAD_ERR_OK){
				$dest_upload_file = dirname(__FILE__) . "\\picture\\" . $_FILES['upload_file']['name'];
				move_uploaded_file($_FILES['upload_file']['tmp_name'], $dest_upload_file);
				echo "檔案已成功上傳到：" . $dest_upload_file;
			} else {
				echo "上傳失敗，錯誤代碼：" . $_FILES['upload_file']['error'];
			}
		?>
		<!-- InstanceEndEditable -->	
	</center>
</body>
<!-- InstanceEnd --></html>
