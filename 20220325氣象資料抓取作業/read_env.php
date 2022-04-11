<?php
    $url = "https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0002-001";


    $path = "./.env";
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {

        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }

    $key = getenv("KEY");
    # echo $key;

    $url = $url."?Authorization=".$key;
    # echo url;

    $contents = file_get_contents($url);
    # echo $contents;

    # $data = json_decode($contents);
    # print_r($data);

?>