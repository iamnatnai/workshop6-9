<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
<script>
</script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member where username like ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute();
$row = $stmt->fetch();?>
ชื่อสมาชิก : <?=$row ["name"]?><br>
ที่อยู่ : <?=$row ["address"]?><br>
อีเมล : <?=$row ["email"]?><br>
เบอร์โทร : <?=$row ["mobile"]?><br>
</body>
</html>