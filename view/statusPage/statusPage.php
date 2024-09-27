<?php
   $code=$_GET['code'];
   $langugae=$_GET['language'];
    $fileData=$_GET['fileData'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello from statusPage <br>
    <?php echo $code; ?><br>
    <?php echo $langugae; ?><br>
    <?php echo $fileData; ?><br>
</body>
</html>