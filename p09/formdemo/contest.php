<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form 데이터 전송 실습</title>
        </head>
<?php    
    
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    
?>
<body>
    <h1><?php echo $firstname; ?></h1>
    <h1><?php echo $lastname; ?></h1>
</body>
