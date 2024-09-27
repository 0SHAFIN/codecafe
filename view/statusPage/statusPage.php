<?php
   $code=$_GET['code'];
   $langugae=$_GET['language'];
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
    <?php echo $langugae; ?>
</body>
</html>