<?php

function myScan($path)
{
    $data = [];

    if (is_dir($path) && $handle = opendir($path)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $fullPath = $path . '/' . $entry;

                if (is_file($fullPath) || is_dir($fullPath)) {
                    $data[] = $fullPath;
                }
            }
        }
        closedir($handle);
    }
    sort($data);
    
    $html = "";
    foreach ($data as $item) {
        $href = str_replace("./", "", $item);
        $li = str_replace(".//", "", $item);

        $html .= "<li><a href='$href'>$li</a></li>\n";
    }

    return $html;
}

echo myScan("./");
