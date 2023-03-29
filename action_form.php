<?php

echo "<pre>";
print_r($_POST);
print_r($_FILES);
$uploads_dir = 'uploads';

$files = $_FILES;

if ($files) {
    foreach ($files as $file) {
        if (is_array($file['name'])) {
        $length = count($file['name']);
        for ($i = 0; $i < $length; $i++) {
            if ($file['error'][$i]) {
                echo 'error';
                continue;
            }

            $filename = $file['name'][$i];
            $tmp_name = $file['tmp_name'][$i];
            move_uploaded_file($tmp_name, "$uploads_dir/$filename");
        }
    } else {
        if ($file['error']) {
        echo 'error';
        exit;
        }

            $filename = $file['name'];
            $tmp_name = $file['tmp_name'];
            move_uploaded_file($tmp_name, "$uploads_dir/$filename");
        }
    }
}
echo "<pre>";

