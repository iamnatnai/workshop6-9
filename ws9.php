<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช ั คลิกที่ ้ link ลบ
var ans = confirm("ต้องการแก้ไข " + username); // แสดงกล่องถามผู้ใช ้
if (ans==true) // ถ้าผู้ใชกด ้ OK จะเข ้าเงื่อนไขนี้
document.location = "edit.php?username=" + username; // สงรหัสส ่ นค ้าไปให ้ไฟล์ ิ delete.php
}
</script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {?>
ชื่อสมาชิก : <?=$row ["name"]?><br>
ที่อยู่ : <?=$row ["address"]?><br>
อีเมล : <?=$row ["email"]?><br>
เบอร์โทร : <?=$row ["mobile"]?><br>
<a href="form.php?username=<?=$row['username']?>">แก้ไข</a>;<br><hr>
<?php } ?>
</body>
</html>