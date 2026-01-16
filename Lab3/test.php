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
    // var_dump($_GET['baran']);
    $zagon = explode(' ', $_GET['baran']);
    upFunc($zagon);
    echo implode(' ', $zagon);
}
function upFunc(&$zagon){
for($i = 0; $i < count($zagon); $i++){
        if($i % 2 > 0){
            $zagon[$i] = strtoupper($zagon[$i]);
        }
    }
}
?>