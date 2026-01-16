<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test21.php" method="get">
    <input type="text" name="baran">
    <button type="submit">нажми на меня~~</button>
</form>
</body>
</html>

<?php
$XVI="Иван Васильевич";
$XVIII="Пётр Алексеевич";
$XIX="Николай Павлович";
if (isset($_GET['baran'])){
    $vek = $_GET['baran'];
    echo 'в '. $vek .' веке царствовал '. $$vek;
}
?>