<?php

include 'ChromePhp.php';
ChromePhp::log('Hello console!');
ChromePhp::log($_SERVER);
ChromePhp::warn('something went wrong!');
ChromePhp::error('OMG!');

$myself = [
    "name" => "Matteo",
    "year" => 1983
];

function getAge($yearOfBirth) {
    $thisYear = date('Y');
    $age = $thisYear - $yearOfBirth;
    return $age;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hello PHP</title>
	</head>
	<?php ChromePhp::log($myself); ?>
	<body>
        <h1>
            Hello <?php echo $myself["name"]; ?>
        </h1>
        <p>
            <?php 
                $age = getAge($myself["year"]);
                ChromePhp::log($age);
                if ($age > 18) {
                    echo("You can come in");
                } else {
                    echo("Too young, go back home");
                }
            ?>
        </p>
	</body>
</html>