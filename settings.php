<?php

session_start();

$path = $_SERVER['DOCUMENT_ROOT'];

foreach (glob($path."/Database/*.php") as $filename) {
    include $filename;
}

foreach (glob($path."/Module/*.php") as $filename) {
    include $filename;
}

foreach (glob($path."/Module/Utility/*.php") as $filename) {
    include $filename;
}

require_all('Module/Modules');

foreach (glob($path."/View/Utility/*.php") as $filename) {
    include $filename;
}

foreach (glob($path."/View/Views/*.php") as $filename) {
    include $filename;
}

foreach (glob($path."/View/*.php") as $filename) {
    include $filename;
}

foreach (glob($path."/Action/Utility/*.php") as $filename) {
    include $filename;
}

foreach (glob($path."/Action/Actions/*.php") as $filename) {
    include $filename;
}

foreach (glob($path."/Action/*.php") as $filename) {
    include $filename;
}

include 'LifeTracker.php';

function require_all($dir, $depth=0) {
    $max_scan_depth = 1;
    if ($depth > $max_scan_depth) {
        return;
    }
    // require all php files
    $scan = glob("$dir/*");
    foreach ($scan as $path) {
        if (preg_match('/\.php$/', $path)) {
            include $path;
        }
        elseif (is_dir($path)) {
            require_all($path, $depth+1);
        }
    }
}

?>
