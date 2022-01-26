<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_REQUEST["input"];
    $check = $_REQUEST["check"];

    if (empty($input)) {
        $input = "nhap vao di";
        $check = "nhap de kiem tra";
    }


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="input" placeholder="nhap vao day">
    <input type="text" name="check" placeholder="nhap tu can kiem tra">
    <button>Check</button>
</form>
</body>
</html>
