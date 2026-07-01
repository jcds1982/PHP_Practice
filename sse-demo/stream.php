<?php
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header("Connection: keep-alive");

$last = 0;

while (true) {
    clearstatcache();
    $size = filesize("data.txt");

    if ($size > $last) {
        $content = trim(file_get_contents("data.txt"));

        echo "data: " . json_encode(["value" => $content]) . "\n\n";
        ob_flush();
        flush();

        $last = $size;
    }

    usleep(500000); // 0.5s
}
