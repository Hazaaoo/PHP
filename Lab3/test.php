<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="get">
    <input type="text" name="baran">
    <button type="submit">жми</button>
</form>
</body>
</html>

<?php
if (isset($_GET['baran'])){
echo 
}
function upFunc(&$zagon){
for($i = 0; $i < count($zagon); $i++){
        if($i % 2 > 0){
            $zagon[$i] = strtoupper($zagon[$i]);
        }
    }
}
?>