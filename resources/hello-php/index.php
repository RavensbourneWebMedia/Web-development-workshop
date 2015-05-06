<?php
    include 'ChromePhp.php';
    ChromePhp::log('Hello console!');
    ChromePhp::log($_SERVER);
    ChromePhp::warn('something went wrong!');
    ChromePhp::error('OMG!');

    /*function log($data) {
        ob_start(); 
        ChromePhp::log($data);
        ob_flush();
    }*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello PHP</title>
	</head>
	<body>
        <h1>
          <?php
//             echo phpinfo();
//            $headers_sent = headers_sent();
//            echo ('headers_sent? ' . $headers_sent);
            ChromePhp::log('OMG again!');
          ?>
        </h1>
	</body>
</html>