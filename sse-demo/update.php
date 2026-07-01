<?php
if (!empty($_POST["value"])) {
    $value = strip_tags($_POST["value"]);
    file_put_contents("data.txt", $value);
    echo "OK";
}
