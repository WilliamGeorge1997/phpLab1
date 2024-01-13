<?php 
//Lab1
phpinfo();
?>

<!-- ============================================================= -->

<?php 
//Lab2
define('WEBSITE_NAME','EasyBuy');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo WEBSITE_NAME ?></title>
</head>

<body>
    <h1><?php echo WEBSITE_NAME ?></h1>
</body>

</html>

<!-- ============================================================= -->


<!-- Lab3 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>

<body>
    <ul>
        <li>Server name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Server address: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
        <li>Server port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>Current executing script filename and path: <?php echo __FILE__; ?></li>
    </ul>
</body>

</html>


<!-- ============================================================= -->


<?php
//Lab4
$brotherAge = 10;

switch ($brotherAge) {
    case ($brotherAge < 5):
        echo 'Stay at home.';
        break;
    case ($brotherAge == 5):
        echo 'Go to Kindergarden.';
        break;
    case ($brotherAge >= 6 && $brotherAge <= 12):
        echo 'Go to grade: 4' ;
        break;
    default:
        echo 'Age is not within the specified ranges.';
        break;
}
?>