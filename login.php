<html>
<head>
<meta charset="utf-8" />
    <title>صفحة الدخول</title>
	
</head>
<body>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "linux" && $pass == "123"){
    echo"كلمة المرور صحيحه";        
}else{    
    echo "كلمة المرور خاطئة انتظر لاحظات لكي ننقلك لصفحة الدخول من جديد";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='3; url=login.htm'>";
}
?>
</body>
</html>
