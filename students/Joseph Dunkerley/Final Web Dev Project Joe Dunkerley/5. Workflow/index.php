<?php
    include 'ChromePhp.php';
   //   ChromePhp::log('Hello console!');
  //  ChromePhp::log($_SERVER);
 //   ChromePhp::warn('something went wrong!');


$myself = [
    "name" => "Person",
    "year" => 1995
];

ChromePhp::log($myself);

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
    <body>
<h2>Hello <?php print ($myself["name"]); ?></h2>
<p>
    <?php 
    // get the current user age

        $age = getAge($myself["year"]);

    // if the age is equal or greater than 18...
    // let them in
    // else
    // tell them to go away

        ChromePhp::log($age);
        if ($age >= 18) {
            echo("Come in");
        } else {
            echo("Go away");
        }
    ?>
</p>
    </body>
</html>