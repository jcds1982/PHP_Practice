<?php
echo "hello my friend. Let's practice the thing you forgot a long time ago. ";

// Variable declaration
$name = 'Julio';
$age = 12;

echo is_string($age);
echo !is_string($name);
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

if(isset($referer) ){
    sleep(3);
    header("Location:" . $referer);
}
