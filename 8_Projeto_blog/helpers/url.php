<?php
    $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);
    if (substr($BASE_URL, -1) !== '/') {
        $BASE_URL .= '/';
}
?>