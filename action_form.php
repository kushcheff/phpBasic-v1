<?php

echo "<pre>";
print_r($_POST);
print_r($_FILES);
$uploads_dir = 'uploads';
$files = $_FILES;

$phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);

if ($files) {
    foreach ($files as $file) {
        if (is_array($file['name'])) {
            foreach ($file['name'] as $i => $filese) {
                if ($file['error'][$i]) {
                    echo $phpFileUploadErrors[$file['error'][$i]] . "<br>";
                    continue;
                }
                $filename = $file['name'][$i];
                $tmp_name = $file['tmp_name'][$i];
                move_uploaded_file($tmp_name, "$uploads_dir/$filename");
            }
        } else {
            if ($file['error']) {
                echo $phpFileUploadErrors[$file['error']] . "<br>";
                continue;
            }
            $filename = $file['name'];
            $tmp_name = $file['tmp_name'];
            move_uploaded_file($tmp_name, "$uploads_dir/$filename");


        }
    }
}


